@extends('layouts.admin')

@section('title', 'Admin Summary Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4 class="title">Resume Summary Settings</h4>
                </div>
                <div class="content">

                    <form action="{{ url('/admin/summary_setting') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Title</label>
                                    <input type="text" value="{{ $summary_setting->title ?? ''}}" name="title" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <input type="text" value="{{ $summary_setting->description ?? ''}}" name="description" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Address</label>
                                    <input type="text" value="{{ $summary_setting->address ?? ''}}" name="address" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Contact</label>
                                    <input type="text" value="{{ $summary_setting->contact ?? ''}}" name="contact" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Email</label>
                                    <input type="email" value="{{ $summary_setting->email ?? ''}}" name="email" class="form-control" />
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
