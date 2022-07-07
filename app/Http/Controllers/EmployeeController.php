<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    private $catchIns;

    public function employees()
    {
        return view('employees');
    }

    public function addEmployee()
    {
        return view('addEmployee');
    }

    public function submitEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->designation = $request->input('designation');
        $employee->save();

        return redirect('employees');
    }

    public function getEmployees()
    {
        $employees= Employee::select('id','name','email','designation','status')->with('phones')->get();

        $returnArray = $employees->toArray();

        //djd($returnArray);

        for ($i=0; $i < sizeof($returnArray) ; $i++) {
            $returnArray[$i]['buttons'] =
            '<button type="button" class="btn btn-sm btn-success">Edit</button>
             <button type="button" class="btn btn-sm btn-danger">Delete</button>';
        }

        writeJson('E:/Test php File/newT',$returnArray);

        return json_encode($returnArray);
    }


}
