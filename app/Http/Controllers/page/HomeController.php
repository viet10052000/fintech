<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Post;
use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('id', 'DESC')->paginate(8);
        $pagesView = Page::orderBy('view','DESC')->limit(5)->get();
        $stars = Star::orderBy('id','DESC')->limit(5)->get();
        return view('pages.home',compact(['pages','pagesView','stars']));
    }

    public function summary() {
        return view('pages.sumary');
    }

    public function currency() {
        return view('pages.currency');
    }

    public function binance() {
        return view('pages.binance');
    }
    public function page() {
        $pages = Page::orderBy('id', 'DESC')->paginate(8);
        return view('pages.page',compact(['pages']));
    }

    public function pageDetail($id) {
        $page = Page::where('id',$id)->first();
        $page->view = $page->view + 1;
        $page->save();
        return view('pages.page-detail',compact(['page']));
    }

    public function expert() {
        $posts = Post::orderBy('id', 'DESC')->paginate(8);
        return view('pages.post',compact(['posts']));
    }

    public function expertDetail($id) {
        $post = Post::where('id',$id)->first();
        $comments = Comment::where('post_id',$id)->get();
        $star = Star::where('post_id',$id)->count();
        $post->view = $post->view + 1;
        $post->save();
        return view('pages.post-detail',compact(['post','comments','star']));
    }

    public function comment(Request $request) {
        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->book_id = $request->post_id;
        $comment->content = $request->comment;
        if ($comment->content == null)
        {
            return redirect()->back();
        }
        $comment->save();
        return redirect()->back();
    }

}
