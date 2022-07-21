<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(8);

        return view('admin.posts.index',compact('posts'));
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if (file_exists($post->image)){
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect()->back()->with('status','xóa thành công!');
    }
}
