<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //


    public function dashboard(){

        return view('admin.dashboard');
    }




    public function showAdminLogin(){

        return view('admin.auth.login');
    }

    public function checkAdminLogin(Request $request){
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ])->validate();


        if (Auth::guard('admin')->attempt(['email'=>$request['email'], 'password'=>$request['password']])) {

             return redirect()->route('admin.dashboard')->with('toast', 'success')
            ->with('message', 'Login successful! Welcome ' .auth()->guard('admin')->user()->first_name .' ' .auth()->guard('admin')->user()->last_name);
        }
        else{
            return redirect()->back()->with('error', 'Invalid Login Credentials');
        }
    }
}
