<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    //
    public function site()
    {
        return view('site');
    }
    public function admin()
    {
        return view('admin');
    }
    public function adminlogin()
    {
        return view('auth.Adminlogin');
    }
    public function check_admin_login(Request $request)
                {
            $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
            ]);
            if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                //return redirect()->intended('admin');
                return 'true';
            }
           // return back()->withInput($request->only('email'));
           return 'false';
    }
}
