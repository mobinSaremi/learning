<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Library\Helper;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login-form');
    }
    public function postLogin(Request  $request)
    {
        $input = $request->all();   
        $check = Auth::attempt([
            'email' => $input['email'],
            'password' => Helper::persian2LatinDigit($input['password']),
        ]);
        if ($check) {
            return redirect('/admin')->with('success', 'welcome');
        } else {
            return redirect()->back()->with('error', 'The information entered is not correct');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/admin/login')->with('success', 'Logout was successful');
    }
}
