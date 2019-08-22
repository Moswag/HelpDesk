<?php

namespace App\Http\Controllers\Admin;

use App\AppConstants;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Issue;
use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function viewIssues(){
        $active=AppConstants::DASHBOARD;
        $issues=Issue::where('assigned_to',null)->get();
        return view('admin.view_issues_not_assigned',compact('issues','active'));
    }


    public function assignTask($id){
        $issue=Issue::find($id);
        $active=AppConstants::DASHBOARD;
        $employees=Employee::all();
        return view('admin.assign_task',compact('issue','active','employees'));
    }

    public function assignUpdateTask(Request $request){
        $issue=Issue::where('id',$request->id)->update([
            'assigned_to'=>$request->user
        ]);
        if($issue){
            return redirect()->route('view_issues')->with('message','Issue successfully assigned user');
        }
    }

    public function viewAllIssues(){
        $active=AppConstants::DASHBOARD;
        $issues=Issue::where('assigned_to','<>',null)->get();
        return view('admin.view_issues',compact('issues','active'));
    }

}
