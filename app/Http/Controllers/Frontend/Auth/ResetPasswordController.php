<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;
use App\Http\Requests\UserRequestNewPassword;

class ResetPasswordController extends Controller
{
    //Lay Email de reset password
    public function getEmailReset()
    {
        return view('frontend.auth.password.email');
    }
    //Gửi mail xác nhận
    public function checkEmailReset(Request $request)
    {

        $account = \DB::table('users')->where('email',$request->email)->first();
        if ($account){
            //Gửi mail
            $token = Hash::make($account->email.$account->id);
            \DB::table('password_resets')->insert([
                'email' => $account->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);
            //lik gui ve mail de lay lai tai khoan
            $link = route('get.new_password',['email' => $account->email,'_token' => $token ]);

            Mail::to($account->email)->send(new ResetPassword($link));

            return redirect()->to('/');
        }
        return redirect()->back();

    }

    public function newPassword(Request $request)
    {
        // check ton tai token
        $token = $request->_token;
        $checktoken = \DB::table('password_resets')->where('token', $token)->first();

        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Lấy lại mật khẩu thành công'
        ]);

        if (!$checktoken)  return redirect()->to('/');
        // check time tao token qua 3 ph chua
        $now = Carbon::now();
        if ($now->diffInMinutes($checktoken->created_at) > 3){
            \DB::table('password_resets')->where('email', $request->email)->delete();
            return redirect()->to('/');
        }

        return view('frontend.auth.password.reset_password');
    }

    public function savePassword(UserRequestNewPassword $request)
    {
        $password = $request->password;
        $data['password'] = Hash::make($password);//Ma hoa password
        $email = $request->email;
        \Session::flash('toastr',[
            'type' => 'success',
            'message' => 'Lấy lại mật khẩu thành công'
        ]);
        if (!$email) return redirect()->to('/');
        \DB::table('users')->where('email', $email)->update($data);
        \DB::table('password_resets')->where('email', $email)->delete();
        return redirect()->route('get.login');
    }

}
