<?php

namespace App\Http\Controllers\Admin;

use App\AppConstants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $active=AppConstants::DASHBOARD;
        return view('admin.dashboard',compact('active'));
    }









}
