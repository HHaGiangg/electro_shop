<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRepquest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function getRegister()
    {
        return view('frontend.auth.register');
    }
    // Đăng ký
    public function postRegister(RegisterRepquest $request)
    {
        $data   = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        $data['created_at'] = Carbon::now();
        $user = User::create($data);
        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Đăng ký thành công'
        ]);
        if (\Auth::loginUsingId($user->id)){
            return redirect()->route('get.home');
        }
        return redirect()->back();
    }
}
