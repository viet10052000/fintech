<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Post;
use App\Models\Star;
use App\Models\Subcribe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $user = Auth::user();
        $subcribes = Subcribe::where('user_id','=',$user->id)->get();
        if($subcribes){
            $posts = [];
            foreach($subcribes as $subcribe){
                $subPosts = Post::where('user_id','=',$subcribe->expert_id)->where('public','=','0')->get();
                foreach($subPosts as $subPost){
                    array_push($posts,$subPost);
                }
                
            }
            $publicPosts = Post::where('public','=','1')->orderBy('id', 'DESC')->get();
            foreach($publicPosts as $publicPost){
                array_push($posts,$publicPost);
            }
            $posts = $this->paginate($posts);
            return view('pages.post',compact(['posts']));
        }
        $posts = Post::where('public','=','1')->orderBy('id', 'DESC')->paginate(8);
        return view('pages.post',compact(['posts']));
    }

    public function paginate($items, $perPage = 8, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function expertDetail($id) {
        $post = Post::where('id',$id)->first();
        $comments = Comment::where('post_id',$id)->get();
        $star = Star::where('post_id',$id)->count();
        $post->view = $post->view + 1;
        $post->save();
        return view('pages.post-detail',compact(['post','comments','star']));
    }

    public function expertProfile($id) {
        $user = User::find($id);
        $isSubcribe = 0;
        $subcribe = DB::table('subcribes')
        ->where('expert_id','=',$id)->where('user_id','=',Auth::user()->id)->first();
        $subcribeNum = DB::table('subcribes')
        ->where('expert_id','=',$id)->count();
        if($subcribe){
            $isSubcribe = 1;
            $posts = Post::where('user_id','=',$id)->orderBy('id', 'DESC')->paginate(8);
        } else {
            $posts = Post::where('user_id','=',$id)->where('public','=','1')->orderBy('id', 'DESC')->paginate(8);
        }
        
        return view('pages.expert-profile',compact(['posts','user','isSubcribe','subcribeNum']));
    }

    public function expertSubcribe(Request $request){
        $expert = User::find($request->input('user_id'));
        if($expert){
            $user = Auth::user();
            $subcribe = new Subcribe();
            $subcribe->user_id =  $user->id;
            $subcribe->expert_id =  $expert->id;
            $subcribe->save();
            // DB::insert('insert into subcribes (user_id,expert_id) values (?,?)',[$user->id,$expert->id]);
            return redirect(route('expert.profile',$expert->id))
            ->with('status','Đăng ký thành công!');
        }
        
    }

    public function expertUnSubcribe(Request $request){
        $expert = User::find($request->input('user_id'));
        if($expert){
            $user = Auth::user();
            $subcribe = Subcribe::where('expert_id','=',$expert->id)->where('user_id','=',$user->id);
            if($subcribe)
                {
                    $subcribe->delete();
                    return redirect(route('expert.profile',$expert->id))
                        ->with('status','Hủy đăng ký thành công!');
                }
            
            // DB::insert('insert into subcribes (user_id,expert_id) values (?,?)',[$user->id,$expert->id]);
            return redirect(route('expert.profile',$expert->id))
            ->with('status','Hủy đăng thành công!');
        }
        
    }

    public function expertList(){
        $experts = User::where('role','=','2')->paginate(8);
        
        return view('pages.expert-list',compact(['experts']));
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
