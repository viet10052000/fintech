@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Danh sách comment bài đăng chuyên gia</h2>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>Tên người dùng</th>
                                    <th>Tên Bài Đăng</th>
                                    <th>Comment</th>
                                    <th>Thời Gian</th>
                                    <th colspan="1"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->user->name}}</td>
                                        <td>{{$comment->post->title}}</td>
                                        <td>{{$comment->content}}</td>
                                        <td>{{$comment->updated_at}}</td>
                                        <td class="d-flex flex-row p-1">
                                            <div class="p-1">
                                                <form method="post" action="{{route('comment.destroy',$comment->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('bạn muốn xóa comment này?');" class="btn btn-danger">xóa</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$comments->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

