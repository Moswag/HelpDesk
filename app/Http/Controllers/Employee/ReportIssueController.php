<?php

namespace App\Http\Controllers\Employee;

use App\AppConstants;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Issue;
use App\IssueCategory;
use Illuminate\Http\Request;

class ReportIssueController extends Controller
{
    public function dashboard(){
        $active=AppConstants::DASHBOARD;
        return view('employee.dashboard',compact('active'));
    }


    public function reportIssue(){
        $active=AppConstants::DASHBOARD;
        $categories=IssueCategory::all();
        return view('employee.report_issue',compact('active','categories'));
    }


    public function saveReportIssue(Request $request){

        $category=IssueCategory::find($request->category);
        $issue=new Issue();
        $issue->requester=auth()->user()->id;
        $issue->description=$request->description;




        if($request->category=='Other'){
            $issue->category=$request->category;
            $issue->priority='High';
            $issue->status=AppConstants::ISSUE_TO_BE_ASSIGNED;

            if ($issue->save()) {
                return redirect()->route('my_reported_issues')->with('message', 'Issue successfully submitted');
            } else {
                return back()->with('error', 'Failed to submit report, please contact admin');
            }
        }
        else {
            $issue->category=$category->category;
            $issue->priority=$category->priority;

            $employees = Employee::where('department_id', $category->department_id)->count();

            if ($employees > 0) {
                $issue->status=AppConstants::ISSUE_PENDING;
                $emps = Employee::where('department_id', $category->department_id)->get();
                foreach ($emps as $emp){
                    $issue->assigned_to=$emp->id;
                }
                if ($issue->save()) {
                    return redirect()->route('my_reported_issues')->with('message', 'Issue successfully submitted');
                } else {
                    return back()->with('error', 'Failed to submit report, please contact admin');
                }
            } else {
                $issue->status=AppConstants::ISSUE_TO_BE_ASSIGNED;
                if ($issue->save()) {
                    return redirect()->route('my_reported_issues')->with('message', 'Issue successfully submitted, it will be assigned to employee manually');
                } else {
                    return back()->with('error', 'Failed to submit report, please contact admin');
                }
            }
        }
    }


    public function viewMyReportedIssues(){
        $active=AppConstants::DASHBOARD;
        $issues=Issue::where('requester',auth()->user()->id)->get();
        return view('employee.my_reported_issues',compact('issues','active'));
    }
}
