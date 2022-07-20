<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    private $catchIns;
//Employee list
    public function employees()
    {
        return view('employees');
    }

    public function getEmployees()
    {
        $employees= Employee::select('id','name','email','designation','status')->with('phones')->get();

        $returnArray = $employees->toArray();

        //djd($returnArray);

        for ($i=0; $i < sizeof($returnArray) ; $i++) {
            $returnArray[$i]['buttons'] =
            '<a href="'.url('updateEmployee/'.$returnArray[$i]['id']).'" class="btn btn-sm btn-primary">Edit</a>
             <a href="" class="btn btn-sm btn-danger">Delete</a>';
        }

        writeJson('E:/Test php File/newT',$returnArray);

        return json_encode($returnArray);
    }
////////////

//Add Employee
    public function addEmployee()
    {
        return view('addEmployee');
    }

    public function submitEmployee(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|alpha',
            'email'=>'required|email|unique:employees,email',
            'designation'=>'required|alpha'
        ])->validate();


        // if ($validator->passes()) {
        //     # code...
        // } else {
        //     # code...
        // }


        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->designation = $request->input('designation');
        $employee->save();

        return response()->json(['success'=>true,'message'=>'Employee Added Successfully','redirect'=>url('employees')]);
    }
////////////

//Edit Employee
    public function updateEmployeePage($id)
    {
        $data['employee'] = Employee::find($id);
        return view('updateEmployee',$data);
    }

    public function updateEmployee(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|alpha',
            'email'=>"required|unique:employees,email,{$id}",
            'designation'=>'required|alpha',
        ])->validate();

        $employee = Employee::find($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->designation = $request->input('designation');
        $employee->status = $request->input('status')==true ? 1 : 0;
        $employee->save();

        return response()->json(['success'=>true,'message'=>'Employee Edited Successfully','redirect'=>url('employees')]);
    }
////////////

//Delete Employee
    public function deleteEmployee($id)
    {
        # code...
    }
////////////



}
