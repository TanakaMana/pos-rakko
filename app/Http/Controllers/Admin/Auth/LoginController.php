<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('adminAuth.login');
    }
    protected function guard()
    {
        return \Auth::guard('admin');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/admin/login');
    }
}
