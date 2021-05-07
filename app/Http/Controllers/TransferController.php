<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Due;
use App\Models\Bank;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $dues = Due::all();
        $bank = Bank::sum('current_balance');
        $sum = Due::sum('new_amount');
$remaining_balance = $bank -  $sum;
        return view('input', compact('employees','dues','sum','remaining_balance'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'employee_id'=> 'required',
            'new_amount' => 'required',
           
        ]);
        $due = new Due([
            'employee_id' => $request->input('employee_id'),
            'new_amount' => $request->input('new_amount'),
           
        ]);
       
        $due->save();

        return redirect()->back()->with('success','Amount transfered successfully!');
    }
}
