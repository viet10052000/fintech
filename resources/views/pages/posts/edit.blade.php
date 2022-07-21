@extends('pages.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sửa Bài Đăng</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input type="text" value="{{$post->title}}" name="title" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Nội dung</label>
                                <textarea type="text" name="description" rows="10" onresize="none" class="form-control" aria-describedby="emailHelp">{{$post->description}}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <div>
                                    @if ($post->image)
                                        <img class="img-thumbnail" width="120px" src="{{ asset($post->image) }}" alt="{{ $post->title }}" />
                                    @endif
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">link url</label>
                                <input type="text" value="{{$post->url}}" name="url" class="form-control" aria-describedby="emailHelp">
                            </div>

                            <a href="{{route('admin.pages.index')}}" class="btn btn-secondary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

