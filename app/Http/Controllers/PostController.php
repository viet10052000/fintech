<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(8);

        return view('pages.posts.index',compact('posts'));
    }

    public function create() {
        return view('pages.posts.create');
    }

    public function store(Request $request) {
        $data = $request->validate(
            [
                'title' => 'required|max:255|unique:pages',
                'description' => 'required',
            ]
        );
        $post = new Post();
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->url = $request->url;
        $post->public = $request->public;
        $post->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $post->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $post->user_id = Auth::user()->id;
        $path = $this->_upload($request);
        if ($path) {
            $post->image = $path;
        }
        $post->save();
        return redirect()->back()->with('status','thêm thành công!');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages.posts.edit',compact(['post']));
    }

    public function update(Request $request, $id){
        $data = $request->validate(
            [
                'title' => 'required|max:255',
                'description' => 'required',
            ]
        );
        $post = Post::find($id);
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->url = $request->url;
        $post->public = $request->public;
        $post->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $post->user_id = Auth::user()->id;
        $path = $this->_upload($request);
        if ($path) {
            $post->image = $path;
        }
        $post->save();
        return redirect()->back()->with('status','sửa thành công!');
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

    public function _upload($request) {
        if ($request->file()) {
            try {
                $name = $request->file('image')->getClientOriginalName();
                $pathFull = 'uploads/' . date("Y/m/d");
                $request->file('image')->storeAs(
                    'public/' . $pathFull,
                    $name
                );
                return '/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }

        }
        return false;
    }
}
