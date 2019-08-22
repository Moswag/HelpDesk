<?php

namespace App\Http\Controllers\Admin;

use App\AppConstants;
use App\Branch;
use App\Department;
use App\Employee;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EmployeeController extends Controller
{
    public function addEmployee(){
        $departments=Department::all();
        $active=AppConstants::EMPLOYEE;
        $branches=Branch::all();
        return view('admin.add_user',compact('departments','active','branches'));
    }


    public function saveEmployee(Request $request){
        if(User::where('employee_id',$request->employee_id)->exists()){
            return back()->with('error','Employee already exists');
        }
        else{
            $employee=new Employee();
            $employee->name=$request->name;
            $employee->surname=$request->surname;
            $employee->email=$request->email;
            $employee->employee_id=$request->employee_id;
            $employee->department_id=$request->department;
            $employee->desk_phone=$request->extension;
            $employee->role=AppConstants::EMPLOYEE;
            $employee->status=AppConstants::STATUS_ACTIVE;

            if($employee->save()){
                $user=new User();
                $user->name=$request->name.' '.$request->surname;
                $user->employee_id=$request->employee_id;
                $user->role=AppConstants::USER_EMPLOYEE;
                $user->password=bcrypt('12345678');
                if($user->save()){
                    return redirect()->route('view_employees')->with('message','Employee successfully added');
                }
                else{
                    return back()->with('error','Failed to add user, please contact admin');
                }
            }
            else{
                return back()->with('error','Failed to add employee, please contact admin');
            }
        }
    }

    public function viewEmployees(){
        $employees=Employee::all();
        $active=AppConstants::EMPLOYEE;
        return view('admin.view_employees',compact('employees','active'));
    }
}
