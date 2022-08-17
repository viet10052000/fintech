@extends('pages.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                                    <input id="name" type="text" class="form-control" value="{{ $user->email }}"
                                        readonly>
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
                                    <input id="name" type="text" class="form-control" value="{{ $subcribeNum }}"
                                        readonly>
                                </div>
                            </div>
                            {{-- @if ($isSubcribe == 0)
                            
                            @endif

                            <div class="row justify-content-end"> 
                                <div class="col-md-2 float-end">
                                @if ($isSubcribe == 0)
                                <button class="fw-bold float-end btn btn-outline-success btn-sm mx-1 subcribe" data="{{$user->id}}">Đăng ký</button>
                                
                                @else
                                <button class="fw-bold float-end btn btn-outline-danger btn-sm mx-1 unsubcribe" data="{{$user->id}}" >Hủy đăng ký</button>
                                @endif
                            </div>
                            </div>
                            @if ($isSubcribe == 0)
                            <div class="row float-end">
                                Đăng ký để xem nhiều bài viết hơn
                            </div>
                            @endif --}}
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
                        <h2>Danh sách người đăng kí</h2>

                    </div>

                    <div class="card-body">
                        @foreach ($users as $user1)
                            <a class="row mt-1 text-decoration-none" style="color:black;">

                                <div class="col-10">
                                    <div class="fw-bold fs-7">{{ $user1->name }}</div>
                                    <div class="fw-bold fs-7">{{ $user1->email }}</div>
                                </div>
                                <div>
                                    <p style="overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">
                                        {{ $user1->name }}
                                    </p>
                                </div>


                            </a>
                            <div class="row justify-content-end">
                                <div class="col-md-2 float-end">
                                    @if ($user1->is_accepted == 0)
                                        <button class="fw-bold float-end btn btn-outline-danger btn-sm mx-1 unsubcribe"
                                            data="{{ $user1->id }}" data1="{{ $user->id }}">Hủy</button>
                                        <button class="fw-bold float-end btn btn-outline-success btn-sm mx-1 subcribe"
                                            data="{{ $user1->id }}" data1="{{ $user->id }}">Đồng ý</button>
                                    @else
                                        <button class="fw-bold float-end btn btn-outline-danger btn-sm mx-1 unsubcribe"
                                            data="{{ $user1->id }}" data1="{{ $user->id }}">Hủy</button>
                                    @endif
                                </div>
                            </div>
                    </div>
                    
                    @endforeach
                </div>
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="subcribeModal" tabindex="-1" aria-labelledby="subcribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ route('admin.expert.subcribe') }}" method="post">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="user_id" id="user_id" value="0">
                    <input type="hidden" name="expert_id" id="expert_id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="subcribeModalLabel">Chấp nhận</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            style="border: 0px"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc muốn cho người dùng này đăng ký không?
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
                <form action="{{ route('admin.expert.unsubcribe') }}" method="post">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="user_id" id="user_id1" value="0">
                    <input type="hidden" name="expert_id" id="expert_id1" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="unsubcribeModalLabel">Hủy đăng ký</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            style="border: 0px"><i class="fas fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc muốn hủy đăng ký người dùng này không?
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $('.subcribe').click(function() {
            $('#user_id').val($(this).attr('data'))
            $('#expert_id').val($(this).attr('data1'))
            var myModal = new bootstrap.Modal($('#subcribeModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>
    <script type="text/javascript">
        $('.unsubcribe').click(function() {
            $('#user_id1').val($(this).attr('data'))
            $('#expert_id1').val($(this).attr('data1'))
            var myModal = new bootstrap.Modal($('#unsubcribeModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>

@stop
