<?php

namespace App\Http\Controllers\Employee;

use App\AppConstants;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Issue;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function viewMyTasks(){
        $active=AppConstants::DASHBOARD;
        $issues=Issue::where([['assigned_to',auth()->user()->id],['status',AppConstants::ISSUE_PENDING]])->get();
        return view('employee.my_tasks',compact('issues','active'));
    }

    public function editTask($id){
        $issue=Issue::find($id);
        $active=AppConstants::DASHBOARD;
        return view('employee.update_task',compact('issue','active'));
    }


    public function updateTask(Request $request){
        $issue=Issue::where('id',$request->id)->update([
            'status'=>$request->status
        ]);
        if($issue){
            return redirect()->route('my_tasks')->with('message','Job successfully closed');
        }
        else{
            return back()->with('error','Failed to update the Job, please contact the admin');
        }
    }


    public function viewClosedTasks(){
        $active=AppConstants::DASHBOARD;
        $issues=Issue::where([['assigned_to',auth()->user()->id],['status','<>',AppConstants::ISSUE_PENDING]])->get();
        return view('employee.my_closed_tasks',compact('issues','active'));
    }

    public function viewEmployee($id){
        $employee=Employee::find($id);
        $active=AppConstants::DASHBOARD;
        return view('employee.view_employee',compact('employee','active'));
    }
}
