@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="list-style: none">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header text-center">
                        <h2>Đổi Mật Khẩu</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.changePass') }}">
                            @csrf
                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Mật khẩu Cũ</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="current_password">
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Mật khẩu mới</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="new_password">
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Nhập Lại mật khẩu mới</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="new_confirm_password">
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-primary">
                                        Thay đổi
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
