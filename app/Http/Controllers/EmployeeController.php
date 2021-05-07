<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all()->toArray();
        return array_reverse($employees);      
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'employee_id'=> 'required|digits:4',
            'employee_name' => 'required',
            'grade' => 'required',
            'bank_account' => 'required',
            
        ]);
        $employee = new Employee([
            'employee_id' => $request->input('employee_id'),
            'employee_name' => $request->input('employee_name'),
            'grade' => $request->input('grade'),
            'address' => $request->input('address'),
            'mobile' => $request->input('mobile'),
            'bank_account' => $request->input('bank_account')
           

        ]);
       
        $employee->save();

        return response()->json('Employee created!');
    }

    public function show($id)
    {
        $employee = Employee::find($id);
        return response()->json($employee);
    }

    public function update($id, Request $request)
    {
        $employee = Employee::find($id);
        $employee->update($request->all());

        return response()->json('Employee updated!');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return response()->json('employee deleted!');
    }
}
