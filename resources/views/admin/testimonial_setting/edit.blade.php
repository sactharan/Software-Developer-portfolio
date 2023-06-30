@extends('layouts.admin')

@section('title', 'Admin Skill Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4>
                        Edit Skill Setting
                        <a href="{{ url('admin/testimonial_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">
                        <div class="card-body">
                            <form action="{{url ('admin/testimonial_setting/'.$testimonial->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" value="{{$testimonial->name}}" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Job</label>
                                        <input type="text" name="job" value="{{$testimonial->job}}" class="form-control" />
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Review</label>
                                        <textarea name="review" id=""  class="form-control"  rows="3">{{ $testimonial->review}}</textarea>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Image</label>
                                        <img src="{{asset("$testimonial->image")}}" width="60px" height="60px" />
                                        <input type="file" name="image" class="form-control"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label><br/>
                                        <input type="checkbox" name="status" {{ $testimonial->status == '1' ? 'checked':''}}  />
                                    </div>
                                </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary text-white">Update Setting</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection










