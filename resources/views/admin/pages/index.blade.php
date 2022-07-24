@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Danh sách tin tức</h2>
                    </div>

                    <div class="card-body ">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Ảnh</th>
                                    <th class="col-1">Lượt xem</th>
                                    <th>Thời gian tạo</th>
                                    <th class="col-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <td class="">{{$page->title}}</td>
                                        <td>
                                            @if ($page->image)
                                                <img class="img-thumbnail" width="100" src="{{ asset($page->image) }}" />
                                            @else
                                                <img class="img-thumbnail" width="100" src="https://vnn-imgs-a1.vgcloud.vn/image1.ictnews.vn/_Files/2020/03/17/trend-avatar-1.jpg" />

                                            @endif
                                        </td>
                                        <td>{{$page->view}}</td>
                                        <td>{{$page->updated_at}}</td>
                                        <td>
                                            <div class="d-flex flex-row">
                                                <div class="p-1 mx-1 me-3">
                                                    <a href="{{route('admin.pages.edit',$page->id)}}" >
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                </div>
                                                <div class="p-1">
                                                    <form method="post" action="{{route('admin.pages.destroy',$page->id)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button style="color: white;border: none;" type="submit" onclick="return confirm('bạn muốn xóa?');" class="cursor-pointer">
                                                            <i class="fa-solid fa-trash-can" style="color: red;cursor: pointer"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$pages->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


