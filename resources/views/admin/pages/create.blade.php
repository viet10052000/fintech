@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Thêm Tin Tức</h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{route('admin.pages.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input type="text" name="title" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Nội dung</label>
                                <textarea type="text" name="description" rows="10" onresize="none" class="form-control" aria-describedby="emailHelp"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Nguồn link url (nếu có)</label>
                                <input type="text" name="url" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>

                            <div class="form-group">
                                <label>Active</label>
                                <div class="form-check">
                                    <input class="form-check-input" value="1" type="radio" name="active" id="active"
                                        checked="">
                                    <label class="form-check-label" for="active">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="0" type="radio" name="active" id="no_active">
                                    <label class="form-check-label" for="no_active">No</label>
                                </div>
                            </div>

                            <a href="{{route('admin.pages.index')}}" class="btn btn-secondary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
