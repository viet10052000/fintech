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
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Ảnh</th>
                                    <th>Nội dung</th>
                                    <th>Lượt xem</th>
                                    <th>Thời gian tạo</th>
                                    <th></th>
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
                                        <td>
                                            <p style="width: 500px;overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">
                                                {{$page->description}}
                                            </p>
                                        </td>
                                        <td>{{$page->view}}</td>
                                        <td>{{$page->updated_at}}</td>
                                        <td class="d-flex flex-row p-1">
                                            <div class="p-1">
                                                <a href="{{route('admin.pages.edit',$page->id)}}" class="btn btn-primary" >
                                                    sửa
                                                </a>
                                            </div>
                                            <div class="p-1">
                                                <form method="post" action="{{route('admin.pages.destroy',$page->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('bạn muốn xóa tin tức này?');" class="btn btn-danger">xóa</button>
                                                </form>
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


