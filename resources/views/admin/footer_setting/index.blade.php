@extends('layouts.admin')

@section('title', 'Admin Footer Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4 class="title">Footer Settings</h4>
                </div>
                <div class="content">

                    <form action="{{ url('/admin/footer_setting') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Title</label>
                                    <input type="text" value="{{ $footer_setting->title ?? ''}}" name="title" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Designer</label>
                                    <input type="text" value="{{ $footer_setting->designer ?? ''}}" name="designer" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Link</label>
                                    <input type="text" value="{{ $footer_setting->link ?? ''}}" name="link" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Year</label>
                                    <input type="text" value="{{ $footer_setting->year ?? ''}}" name="year" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary text-white">Save Setting</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
