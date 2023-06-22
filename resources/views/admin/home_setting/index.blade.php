@extends('layouts.admin')

@section('title', 'Admin Home Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4 class="title">Home Settings</h4>
                </div>
                <div class="content">

                    <form action="{{ url('/admin/home_setting') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Name</label>
                                    <input type="text" value="{{ $home_setting->name ?? ''}}" name="name" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Job 1</label>
                                    <input type="text" value="{{ $home_setting->job1 ?? ''}}" name="job1" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Job 2</label>
                                    <input type="text" value="{{ $home_setting->job2 ?? ''}}" name="job2" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Job 3</label>
                                    <input type="text" value="{{ $home_setting->job3 ?? ''}}" name="job3" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Job 4</label>
                                    <input type="text" value="{{ $home_setting->job4 ?? ''}}" name="job4" class="form-control" />
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
