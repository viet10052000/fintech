@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="pt-2 text-center" style="background: #2d9241;color: white">
                        <h2 class="fw-bold me-3">Tin Tức</h2>
                    </div>
                    <div class="fb-like mt-2 text-end" data-href="{{\URL::current()}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>

                    <div class="card-body">
                        @foreach($pages as $page)
                            <a class="row mt-1 text-decoration-none" style="color:black;" href="{{route('page.detail',$page->id)}}">
                                <div class="col-2">
                                    <img style="width: 100%" src="{{$page->image}}" alt="{{$page->name}}">
                                </div>
                                <div class="col-10">
                                    <div class="fw-bold fs-5">{{ $page->title }}</div>
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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v14.0&appId=1420173931770017&autoLogAppEvents=1" nonce="zQOnkoTE"></script>
@stop
