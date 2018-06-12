<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){

        $employees = Employee::all();
        //return $emp;
        return view('employees.index')->with('employees',$employees);
    }
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show')->with('employee',$employee);
    }

    public function create(){

        return view('employees.create')->with('companies', Company::all());
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->role = $request->input('role');
        $employee->company_id = $request->input('company_id');
        $employee->save();

        return redirect('/employees')->with('Success', 'Company stored');

    }
}
