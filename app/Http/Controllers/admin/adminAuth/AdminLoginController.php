<?php

namespace App\Http\Controllers\admin\adminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function Index(){
        return view("admin.auth.login");
    }

    public function Login(Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email'=>$check['email'], 'password'=>$check['password']])){
            return redirect()->route('admin.dashboard')->with('message', 'Logged in successful');
        }else{
            return back()->with('error', 'email and password does not exist');
        }
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('error', 'Logged out successful');
    }
}
