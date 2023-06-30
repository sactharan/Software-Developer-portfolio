@extends('layouts.admin')

@section('title', 'Admin Professional Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4>
                        Add Professional Setting
                        <a href="{{ url('admin/pro_settings') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">

                    <form action="{{ url('admin/pro_settings/create') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Title</label>
                                    <input type="text"  name="title" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Address</label>
                                    <input type="text"  name="address" class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Start Date</label>
                                    <input type="text"  name="start_to" class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">End Date</label>
                                    <input type="text"  name="end_to" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Point 1</label>
                                    <textarea name="point1" id="" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Point 2</label>
                                    <textarea name="point2" id="" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Point 3</label>
                                    <textarea name="point3" id="" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Point 4</label>
                                    <textarea name="point4" id="" class="form-control" rows="3"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Status</label><br/>
                                    <input type="checkbox" name="status"  />
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
