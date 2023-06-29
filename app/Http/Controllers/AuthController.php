<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.singin');
    }

    public function singup()
    {
        return view('auth.singup');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

}
