<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::orderBy('id', 'DESC')->paginate(8);;
        return view('admin.comments.index',compact('comments'));
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('status','xóa thành công!');
    }
}
