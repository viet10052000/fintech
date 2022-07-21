@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Chuyên Gia Phân Tích Thị Trường</h2>
                    </div>

                    <div class="card-body">
                        @foreach($posts as $post)
                            <a class="row mt-1 text-decoration-none" style="color:black;" href="{{route('expert.detail',$post->id)}}">
                                <div class="col-2">
                                    <img height="75" width="75" src="{{$post->image}}" alt="{{$post->name}}">
                                </div>
                                <div class="col-10">
                                    <div class="fw-bold fs-7">{{ $post->title }}</div>
                                    <div class="fw-bold fs-7">Chuyên Gia Phân Tích: {{ $post->user->name }}</div>
                                    <div class="p-1">Ngày đăng:{{$post->created_at}} - lượt xem: {{$post->view}}</div>
                                    <div>
                                        <p style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">
                                            {{$post->description}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    {{$posts->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>
@stop
