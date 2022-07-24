@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="list-style: none;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <nav aria-label="breadcrumb" class="mx-3 mt-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bài Đăng Chuyên Gia</li>
                        </ol>
                    </nav>
                    <div class="card-header">
                        <span class="fw-bold fs-5">{{ $post->title }}</span>
                        <button class="fw-bold float-end btn btn-secondary btn-sm mx-1">Tặng 1 Sao</button>
                        <span class="float-end fs-5">Số Sao : {{ $star }} </span>
                    </div>

                    <div class="card-header fs-5">
                        <span>Chuyên Gia : {{ $post->user->name }}</span>
                        <a class="fw-bold float-end btn btn-outline-success btn-sm mx-1" href="{{route('expert.profile',$post->user_id)}}">Xem profile</a>

                    </div>

                    <div class="card-body">
                        <div class="view mt-1">
                            Tổng số lượt xem : {{$post->view}}
                        </div>
                        <div class="date mt-1">
                            Ngày Review : {{ $post->created_at }}
                        </div>
                        <div class="mt-3">
                            @if ($post->image)
                                <img style="display: block; margin-left: auto; margin-right: auto;"
                                     class="img-thumbnail" src="{{ asset($post->image) }}" />
                            @endif
                        </div>
                        <div class="content mt-3">
                            <p class="fs-5">
                                {{ $post->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Hỏi & Trả Lời
                    </div>
                    <div class="card-body">
                        @foreach($comments as $comment)
                            <div class="fw-bold">
                                {{ $comment->user->name }}
                            </div>
                            <div>
                                {{ $comment->content }}
                            </div>
                        @endforeach
                        @if(Auth::user())
                            <div>
                                <form class="row g-3" action="{{ route('comment') }}" method="post">
                                    @csrf
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden">bình luận</label>
                                        <input type="text" name="comment" class="form-control" id="inputPassword2" placeholder="bình luận">
                                    </div>
                                    <input type="hidden" name="book_id" value="{{$post->id}}" class="form-control" id="inputPassword2" placeholder="bình luận">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary mb-3">gửi</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
