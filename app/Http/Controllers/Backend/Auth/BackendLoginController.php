<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BackendLoginController extends Controller
{
    //
    public function getLogin()
    {
        return view('backend.auth.login');
    }
    //Đăng nhập
    public function postLogin(Request $request)
    {
        if (\Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password])) {
            //neu dung thi login
            return redirect()->route('get_backend.home');
        }
        return redirect()->back();
    }
    // Đăng Xuất
    public function getlogout()
    {
        \Auth::guard('admins')->logout();
        return redirect()->back();
    }
}
