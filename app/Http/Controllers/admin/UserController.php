<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('role','DESC')->paginate(8);

        return view('admin.users.index',compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(Request $request) {
        $data = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role = 2;
        $user->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $user->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $user->save();
        return redirect()->route('admin.users.create')->with('status','Tạo tài khoản chuyên gia thành công!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status','xóa thành công!');
    }
}
