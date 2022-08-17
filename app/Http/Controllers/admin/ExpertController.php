<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcribe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ExpertController extends Controller
{
    public function list(){   
        $experts = User::where('role','=','2')->paginate(8);
        return view('admin.experts.index',compact(['experts']));
    }

    public function profile($id){
        $user = User::find($id);
        $subcribeNum = DB::table('subcribes')
        ->where('expert_id','=',$id)->count();
        
        $users = DB::table('users')->join('subcribes','users.id','=','subcribes.user_id')->where('subcribes.expert_id','=',$id)
        ->select('users.id as id','users.name as name', 'users.email as email', 'subcribes.is_accepted as is_accepted' )->paginate(8);
        
        return view('admin.experts.profile',compact(['users','user','subcribeNum']));
    }

    public function expertSubcribe(Request $request)
    {
        $expert_id = $request->expert_id;
        $user_id = $request->user_id;
        $subcribe = Subcribe::where('expert_id','=',$expert_id)->where('user_id','=',$user_id)->first();
        $subcribe->is_accepted = 1;
        $subcribe->save();
        return redirect(route('admin.expert.profile',$expert_id))
            ->with('status','Đăng ký thành công!');
    }

    public function expertUnSubcribe(Request $request)
    {
        $expert_id = $request->expert_id;
        $user_id = $request->user_id;
        $subcribe = Subcribe::where('expert_id','=',$expert_id)->where('user_id','=',$user_id)->first();
        if($subcribe)
            {
                $subcribe->delete();
                return redirect(route('admin.expert.profile',$expert_id))
                    ->with('status','Hủy đăng ký thành công!');
            }
            
        return redirect(route('admin.expert.profile',$expert_id))
        ->with('status','Hủy đăng thành công!');
    }
}
