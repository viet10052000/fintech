@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Trang cá Nhân</h2>
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
                                     <input id="name" type="text" class="form-control" name="name" value="Admin" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
