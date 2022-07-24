@extends('pages.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="pt-2 text-center" style="background: #2d9241;color: white">
                        <h2 class="fw-bold me-3">{{ __('Trang Cá Nhân') }}</h2>
                    </div>

                    <div class="card-body">
                        <div>
                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Tên</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Quyền</label>

                                <div class="col-md-6">
                                     <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->role == 2 ? 'Chuyên gia' : 'Người dùng'}}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
