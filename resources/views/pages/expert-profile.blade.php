@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Profile Chuyên gia</h2>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Tên</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ $user->name }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control"
                                        value="{{ $user->email }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Quyền</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ $user->role == 2 ? 'Chuyên gia' : 'Người dùng' }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Số người đăng ký</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control"
                                        value="{{ $subcribeNum }}" readonly>
                                </div>
                            </div>


                            <div class="row justify-content-end">
                                <div class="col-md-2 float-end">
                                @if($isSubcribe == 0)
                                <button class="fw-bold float-end btn btn-outline-success btn-sm mx-1 subcribe" data="{{$user->id}}">Đăng ký</button>

                                @else
                                
                                <button class="fw-bold float-end btn btn-outline-danger btn-sm mx-1 unsubcribe" data="{{$user->id}}" >Hủy đăng ký</button>
                                @endif
                            </div>
                            </div>
                            @if($isSubcribe == 0)
                            <div class="row float-end">
                                Đăng ký để xem nhiều bài viết hơn
                            </div>
                            @endif
                            @if($isSubcribe == 1 && $isAccepted == 0)
                            <div class="row float-end">
                                Chờ Admin chấp nhận
                            </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Danh sách bài đăng</h2>

                    </div>

                    <div class="card-body">
                        @foreach ($posts as $post)
                            <a class="row mt-1 text-decoration-none" style="color:black;"
                                href="{{ route('expert.detail', $post->id) }}">
                                <div class="col-2">
                                    <img style="width: 100%;height: 100px" src="{{ $post->image }}" alt="{{ $post->name }}">
                                </div>
                                <div class="col-10">
                                    <div class="fw-bold fs-7">{{ $post->title }}</div>
                                    <div class="fw-bold fs-7">Chuyên Gia Phân Tích: {{ $post->user->name }}</div>
                                    <div class="p-1">Ngày đăng:{{ $post->created_at }} - lượt xem: {{ $post->view }}
                                    </div>
                                    <div>
                                        <p style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">
                                            {!! html_entity_decode($post->description, ENT_QUOTES, 'UTF-8') !!}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="subcribeModal" tabindex="-1" aria-labelledby="subcribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{route('expert.subcribe')}}" method="post">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="user_id" id="user_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="subcribeModalLabel">Đăng ký</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border: 0px"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc muốn đăng ký không?
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">Có</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="unsubcribeModal" tabindex="-1" aria-labelledby="unsubcribeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('expert.unsubcribe')}}" method="post">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="user_id" id="user_id1" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="unsubcribeModalLabel">Hủy đăng ký</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border: 0px"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc muốn hủy đăng ký không?
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-danger">Hủy đăng ký</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript">
    $('.subcribe').click(function(){
        $('#user_id').val($(this).attr('data'))
        var myModal = new bootstrap.Modal($('#subcribeModal'),
            {
                keyboard: false
            });
        myModal.show();
    });
</script>
<script type="text/javascript">
    $('.unsubcribe').click(function(){
        $('#user_id1').val($(this).attr('data'))
        var myModal = new bootstrap.Modal($('#unsubcribeModal'),
            {
                keyboard: false
            });
        myModal.show();
    });
</script>

@stop
