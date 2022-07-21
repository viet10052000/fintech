@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <nav aria-label="breadcrumb" class="mx-3 mt-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
                        </ol>
                    </nav>
                    <div class="card-header fw-bold fs-5">
                        {{ $page->title }}
                    </div>

                    <div class="card-body">
                        <div class="view mt-1">
                            Tổng số lượt xem : {{$page->view}}
                        </div>
                        <div class="date mt-1">
                            Ngày Tạo : {{ $page->created_at }}
                        </div>
                        <div class="mt-3">
                            @if ($page->image)
                                <img style="display: block; margin-left: auto; margin-right: auto;"
                                     class="img-thumbnail" src="{{ asset($page->image) }}" />
                            @endif
                        </div>
                        <div class="content mt-3">
                            <p class="fs-5">
                                {{ $page->description }}
                            </p>
                        </div>
                        @if($page->url)
                        <div class="content mt-3">
                            <span class="fs-5">Link Tham Khảo : </span>
                            <a class="fs-5" href="{{ $page->url }}">
                                {{ $page->url }}
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
