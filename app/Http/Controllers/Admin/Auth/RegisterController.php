<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }
    protected function guard()
    {
        return \Auth::guard('admin');
    }
}
