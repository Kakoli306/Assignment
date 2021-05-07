<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;

class BankController extends Controller
{
    public function index()
    {
        $banks = Bank::all()->toArray();
        return array_reverse($banks);      
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'account_name'=> 'required',
            'current_balance' => 'required',
            'account_number' => 'required',
          
            
        ]);
        $bank = new Bank([
            'account_name' => $request->input('account_name'),
            'current_balance' => $request->input('current_balance'),
            'account_number' => $request->input('account_number'),
            'branch_name' => $request->input('branch_name'),
            'bank_name' => $request->input('bank_name'),
           
           

        ]);
       
        $bank->save();

        return response()->json('bank created!');
    }

    public function show($id)
    {
        $bank = Bank::find($id);
        return response()->json($bank);
    }

    public function update($id, Request $request)
    {
        $bank = Bank::find($id);
        $bank->update($request->all());

        return response()->json('Bank updated!');
    }

    public function destroy($id)
    {
        $bank = Bank::find($id);
        $bank->delete();

        return response()->json('bank deleted!');
    }
}
