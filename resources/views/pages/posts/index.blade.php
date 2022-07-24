@extends('pages.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h2>Danh sách Bài Đăng</h2>
                            <a href="{{route('posts.create')}}" class="btn btn-success btn-sm float-end" >
                                Tạo mới <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
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
                                    <th class="col-4">Tên</th>
                                    <th>Ảnh</th>
                                    <th>Lượt xem</th>
                                    <th>Người Tạo</th>
                                    <th>Thời gian tạo</th>
                                    <th class="col-1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="">{{$post->title}}</td>
                                        <td>
                                            @if ($post->image)
                                                <img class="img-thumbnail" width="100" src="{{ asset($post->image) }}" />
                                            @else
                                                <img class="img-thumbnail" width="100" src="https://vnn-imgs-a1.vgcloud.vn/image1.ictnews.vn/_Files/2020/03/17/trend-avatar-1.jpg" />

                                            @endif
                                        </td>
                                        <td>{{$post->view}}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td>{{$post->updated_at}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="p-1 mx-3">
                                                    <a href="{{route('posts.edit',$post->id)}}" >
                                                        <i class="fa-solid fa-pen"></i>
                                                    </a>
                                                </div>
                                                <div class="p-1">
                                                    <form method="post" action="{{route('posts.destroy',$post->id)}}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" style="border: none" onclick="return confirm('bạn muốn xóa?');" class="cursor-pointer">
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
                            {{$posts->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



