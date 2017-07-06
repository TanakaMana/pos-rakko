<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('adminAuth.register');
    }
    protected function guard()
    {
        return \Auth::guard('admin');
    }
}
