@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Danh sách chuyên gia</h2>
                    </div>

                    <div class="card-body">
                        @foreach($experts as $expert)
                            <a class="row mt-1 text-decoration-none" style="color:black;" href="{{route('expert.profile',$expert->id)}}">
                                
                                <div class="col-10">
                                   
                                    <div class="fw-bold fs-7">Chuyên Gia : {{ $expert->name }}</div>
                                    {{-- <div class="p-1">Tổng lượt xem: {{$expert->view}}</div> --}}
                                    {{-- <div class="p-1">Tổng lượt đăng ký: {{$expert->subcribe}}</div> --}}
                                    
                                </div>
                            </a>
                        @endforeach
                    </div>
                    {{$experts->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>

@stop