@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tin Tức</div>

                    <div class="card-body">
                        @foreach($pages as $page)
                            <a class="row mt-1 text-decoration-none" style="color:black;" href="{{route('page.detail',$page->id)}}">
                                <div class="col-2">
                                    <img height="75" width="75" src="{{$page->image}}" alt="{{$page->name}}">
                                </div>
                                <div class="col-10">
                                    <div class="fw-bold fs-7">{{ $page->title }}</div>
                                    <div class="p-1">Ngày đăng:{{$page->created_at}} - lượt xem: {{$page->view}}</div>
                                    <div>
                                        <p style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">
                                            {{$page->description}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    {{$pages->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>
@stop
