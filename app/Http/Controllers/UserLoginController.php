<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function showLoginForm() 
    {
        return view('/user/login');
    }
}
