@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Sửa Tin Tức</h2>
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
                        <form method="post" action="{{route('admin.pages.update',$page->id)}}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input type="text" value="{{$page->title}}" name="title" class="form-control" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Nội dung</label>
                                <textarea class="form-control" rows="10" onresize="none" id="description" name="description">
                                    {!! html_entity_decode($page->description) !!}
                                </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">Ảnh</label>
                                <div>
                                    @if ($page->image)
                                        <img class="img-thumbnail" width="120px" src="{{ asset($page->image) }}" alt="{{ $page->title }}" />
                                    @endif
                                    <input class="form-control" type="file" id="image" name="image">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1">link url</label>
                                <input type="text" value="{{$page->url}}" name="url" class="form-control" aria-describedby="emailHelp">
                            </div>

                            <a href="{{route('admin.pages.index')}}" class="btn btn-secondary">Quay lại</a>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
