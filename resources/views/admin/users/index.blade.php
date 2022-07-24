@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Danh sách User</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hover table-lg">
                                <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            @if($user->role == 0)
                                                <span class="text text-success">Người dùng</span>
                                            @elseif($user->role == 1)
                                                <span class="text text-danger">Admin</span>
                                            @else
                                                <span class="text text-warning">Chuyên gia</span>
                                            @endif
                                        </td>
                                        <td class="p-1">
                                            @if($user->role != 1)
                                            <div>
                                                <form method="post" action="{{route('admin.users.destroy',$user->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button style="color: white;border: none;" type="submit" onclick="return confirm('bạn muốn xóa?');" class="cursor-pointer">
                                                        <i class="fa-solid fa-trash-can" style="color: red;cursor: pointer"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$users->links("pagination::bootstrap-4")}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

