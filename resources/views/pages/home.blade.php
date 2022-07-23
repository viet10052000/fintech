@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <h4 class="fw-bold me-3 mx-2">Tin Tức</h4>
                    </div>

                    <div class="card-body">
                        @foreach($pages as $page)
                            <a class="row mt-1 text-decoration-none" style="color:black;" href="{{route('page.detail',$page->id)}}">
                                <div class="col-2">
                                    <img style="width: 100%" src="{{$page->image}}" alt="{{$page->name}}">
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
            <div class="col-md-4">
                <div class="card">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <h6 class="fw-bold me-3 mx-2">Tin Tức có nhiều lượt xem gần đây</h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            @foreach($pagesView as $page)
                                <tr>
                                    <td class="col-8 fw-bold"><a class="text-decoration-none" style="color:black;" href="{{route('page.detail',$page->id)}}">{{$page->title}}</a></td>
                                    <td class="col-4">{{$page->view}} lượt xem</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="pt-2" style="background: #2d9241;color: white">
                        <h6 class="fw-bold me-3 mx-2">Chuyên Gia Nhiều Lượt Sao</h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            @foreach($stars as $star)
                                <tr>
                                    <td class="col-8 fw-bold"><a class="text-decoration-none" style="color:black;" href="">{{$star->user->name}}</a></td>
                                    <td class="col-4">Số Sao : {{$star->star}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
