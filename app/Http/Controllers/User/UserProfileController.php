<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //Hiển thị thông tin
    public function index($id)
    {
        $user   = User::find($id);
        return view('frontend.user.profile.index',compact('user'));
    }
    //Cập nhật thông tin
    public function update(Request $request, $id)
    {
        User::find($id)->update($request->except(['token']));
        return redirect()->back();
    }
}
