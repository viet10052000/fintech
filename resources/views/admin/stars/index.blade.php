@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Số Sao</h2>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Người Đăng</th>
                                    <th>Bài Đăng</th>
                                    <th>Điểm</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($stars as $star)
                                    <tr>
                                        <td>{{$star->user->name}}</td>
                                        <td>{{$star->post->title}}</td>
                                        <td>{{$star->star}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$stars->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

