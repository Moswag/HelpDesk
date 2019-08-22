<?php

namespace App\Http\Controllers\Admin;

use App\AppConstants;
use App\Department;
use App\Http\Controllers\Controller;
use App\IssueCategory;
use Illuminate\Http\Request;

class IssueCategoryController extends Controller
{
    public function addIssueCategory(){
        $departments=Department::all();
        $active=AppConstants::ISSUECATEGORY;
        return view('admin.add_issue_category',compact('departments','active'));
    }


    public function saveIssueCategory(Request $request){
        if(IssueCategory::where('category',$request->category)->exists()){
            return back()->with('error','That issue category already exists');
        }
        else{
            $department=Department::find($request->department);
            $category=new IssueCategory();
            $category->category=$request->category;
            $category->resp_department=$department->name;
            $category->department_id=$request->department;
            $category->priority=$request->priority;

            if($category->save()){
                return redirect()->route('view_issue_categories')->with('message','Issue category successfuly added');
            }
            else{
                return back()->with('error','Oops something went wrong while saving the issue category, please contact admin');
            }
        }
    }


    public function viewIssueCategories(){
        $categories=IssueCategory::all();
        $active=AppConstants::ISSUECATEGORY;
        return view('admin.view_issue_categories',compact('categories','active'));
    }
}
