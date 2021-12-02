<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function getLogin()
    {
        return view('frontend.auth.login');
    }

    //Đăng nhập
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Đăng nhập thành công'
        ]);
        if (\Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('get.home');
        }
    }
    // Đăng Xuất
    public function getLogout(Request $request)
    {
        \Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('get.home');
    }
}
