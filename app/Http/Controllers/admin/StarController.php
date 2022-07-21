<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
    public function index() {
        $stars = Star::orderBy('id', 'DESC')->paginate(8);

        return view('admin.stars.index',compact('stars'));
    }
}
