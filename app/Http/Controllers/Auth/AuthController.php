<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function profileAdmin() {
        return view('admin.profile');
    }

    public function profile() {
        return view('auth.profile');
    }

    public function viewChangePass() {
        return view('admin.change-password');
    }

    public function changePassword(Request $request) {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->back()->with('success','Đổi mật khẩu thành công');
    }

    public function viewChangePassUser() {
        return view('auth.change-password');
    }

}
