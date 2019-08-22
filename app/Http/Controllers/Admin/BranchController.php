<?php

namespace App\Http\Controllers\Admin;

use App\AppConstants;
use App\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function addBranch(){
        $active=AppConstants::BRANCH;
        return view('admin.add_branch',compact('active'));
    }

    public function saveBranch(Request $request){
        if(Branch::where('name',$request->name)->exists()){
            return back()->with('error','Branch already exists');
        }
        else{
            $branch=new Branch();
            $branch->name=$request->name;
            $branch->address=$request->address;
            if($branch->save()){
                return redirect()->route('view_branches')->with('message','Branch successfully added');
            }
            else{
                return back()->with('error','Failed to add branch');
            }
        }

    }

    public function viewBranches(){
        $branches=Branch::all();
        $active=AppConstants::BRANCH;
        return view('admin.view_branches',compact('branches','active'));
    }
}
