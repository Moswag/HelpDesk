<?php

namespace App\Http\Controllers\Admin;

use App\AppConstants;
use App\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartment(){
        $active=AppConstants::DEPARTMENT;
        return view('admin.add_department',compact('active'));
    }


    public function saveDepartment(Request $request){
        if(Department::where('name',$request->name)->exists()){
            return back()->with('error','Department already exists');
        }
        else{
            $department=new Department();
            $department->name=$request->name;
            $department->description=$request->description;

            if($department->save()){
                return redirect()->route('view_departments')->with('message','Department successfully added');
            }
            else{
                return redirect()->route('view_departments')->with('error','Department successfully added');
            }
        }
    }

    public function viewDepartments(){
        $active=AppConstants::DEPARTMENT;
        $departments=Department::all();
        return view('admin.view_departments',compact('departments','active'));
    }



}
