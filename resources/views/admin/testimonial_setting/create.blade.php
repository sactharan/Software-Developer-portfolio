@extends('layouts.admin')

@section('title', 'Admin Testimonial Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4>
                        Add Testimonial Setting
                        <a href="{{ url('admin/testimonial_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">

                    <form action="{{ url('admin/testimonial_setting/create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Name</label>
                                    <input type="text"  name="name" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Job</label>
                                    <input type="text"  name="job" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Review</label>
                                    <textarea name="review" id=""  class="form-control"  rows="3"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" />
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
