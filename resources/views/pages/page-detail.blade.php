@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <nav aria-label="breadcrumb" class="mx-3 mt-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/" class="fs-5">Trang chủ</a></li>
                            <li class="breadcrumb-item active fs-5" aria-current="page">Tin Tức</li>
                        </ol>
                    </nav>
                    <div class="card-header">
                        <div class="mb-2 fw-bold fs-3">{{ $page->title }}</div>
                        <div class="fb-like" data-href="{{\URL::current()}}" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
                    </div>

                    <div class="card-body fs-5">
                        <div class="view mt-1">
                            Tổng số lượt xem : {{$page->view}}
                        </div>
                        <div class="date mt-1">
                            Ngày : {{ $page->created_at }}
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
                            <div class="fs-5 fw-bold">Link Tham Khảo : </div>
                            <a class="fs-5" href="{{ $page->url }}">
                                {{ $page->url }}
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=1420173931770017&autoLogAppEvents=1" nonce="zQOnkoTE"></script>
@stop
