<?php

namespace App\Http\Controllers;

use App\AppConstants;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function index()
    {
        return view('session.login');
    }


    public function login(Request $request)
    {
        if (User::where('employee_id', $request->employee_id)->exists()) {
            if (Auth::attempt(['employee_id' => $request->employee_id, 'password' => $request->password])) {
                if(\auth()->user()->role==AppConstants::USER_ADMIN){
                    return redirect()->route('admin_dashboard')->with('message', 'Welcome to helpdesk');
                }
                else{
                    return redirect()->route('employee_dashboard')->with('message', 'Welcome to helpdesk');
                }

            } else {
                return back()->with('error', 'Failed to login, wrong password');
            }
        }
        else{
            return back()->with('error', 'User with that employee id do not exists');
        }


    }



    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index')->with('message','Successfully logged out');
    }

}
