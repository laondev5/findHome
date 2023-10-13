<?php

namespace App\Http\Controllers\admin\adminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function Index(){
        return view("admin.auth.login");
    }
}
