<?php

namespace App\Http\Controllers\admin\adminAuth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminRegisterController extends Controller
{
   public function Index(){
    return view('admin.auth.register');
   }

   public function Register(Request $request){
      // dd($request->all());

      $request->validate([
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
         'password' => ['required', 'confirmed', Rules\Password::defaults()],
     ]);

     Admin::insert([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
      'created_at' => Carbon::now(),
     ]);

     return redirect()->route('admin.login')->with('error', 'Admin created successfully');
   }
}
