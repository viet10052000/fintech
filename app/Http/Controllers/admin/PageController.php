<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('id', 'DESC')->paginate(8);

        return view('admin.pages.index',compact('pages'));
    }

    public function create() {
        return view('admin.pages.create');
    }

    public function store(Request $request) {
        $data = $request->validate(
            [
                'title' => 'required|max:255|unique:pages',
                'description' => 'required',
            ]
        );
        $page = new Page();
        $page->title = $data['title'];
        $page->description = $data['description'];
        $page->url = $request->url;
        $page->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $page->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $path = $this->_upload($request);
        if ($path) {
            $page->image = $path;
        }
        $page->save();
        return redirect()->route('admin.pages.create')->with('status','thêm thành công!');
    }

    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit',compact(['page']));
    }

    public function update(Request $request, $id){
        $data = $request->validate(
            [
                'title' => 'required|max:255',
                'description' => 'required',
            ]
        );
        $page = Page::find($id);
        $page->title = $data['title'];
        $page->description = $data['description'];
        $page->url = $request->url;
        $page->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $path = $this->_upload($request);
        if ($path) {
            $page->image = $path;
        }
        $page->save();
        return redirect()->back()->with('status','sửa thành công!');
    }

    public function destroy($id)
    {
        $page = Page::find($id);
        if (file_exists($page->image)){
            Storage::delete($page->image);
        }
        $page->delete();
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
