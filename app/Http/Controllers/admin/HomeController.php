<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Star;
use function view;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'DESC')->paginate(8);
        $pagesView = Page::orderBy('view','DESC')->limit(5)->get();
        $stars = Star::orderBy('id','DESC')->limit(5)->get();
        return view('admin.home',compact(['pages','pagesView','stars']));
    }
}
