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
                            <li class="breadcrumb-item active" aria-current="page">Chuyên Gia Phân Tích</li>
                        </ol>
                    </nav>
                    <div class="card-header">
                        <span class="fw-bold fs-4">
                            {{ $post->title }}
                        </span>
                        <a class="fw-bold float-end fs-4" style="color: rgba(218,248,22,0.8);cursor: pointer;">
                            <i class="fa-solid fa-star"></i>
                        </a>
                        <span class="float-end fs-7 mt-2 mx-2">Số Sao : {{ $star }} </span>
                        <div>
                            <div class="fb-like mt-2 text-end" data-href="{{\URL::current()}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                        </div>
                    </div>


                    <div class="fs-5 mx-3 mt-2">
                        <span>Chuyên gia phân tích : </span>{{ $post->user->name }}</span>
                        <a class="fw-bold float-start mx-1" style="cursor: pointer;" href="{{route('expert.profile',$post->user_id)}}">
                            <i class="fa-solid fa-address-card"></i>
                        </a>

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
                                {!! html_entity_decode($post->description, ENT_QUOTES, 'UTF-8') !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                            <div class="mx-3 fw-bold">
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
                                            <input type="hidden" name="post_id" value="{{$post->id}}" class="form-control" id="inputPassword2" placeholder="bình luận">
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
        </div>
    </div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=1420173931770017&autoLogAppEvents=1" nonce="zQOnkoTE"></script>
@stop
