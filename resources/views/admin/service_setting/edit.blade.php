@extends('layouts.admin')

@section('title', 'Admin Service Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4>
                        Edit Service Setting
                        <a href="{{ url('admin/service_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">
                        <div class="card-body">
                            <form action="{{url('admin/service_setting/'.$service->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Title</label>
                                    <input type="text"  name="title" value="{{ $service->title}}" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" id=""  class="form-control" rows="3">{{ $service->description}}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Status</label><br/>
                                    <input type="checkbox" name="status" {{ $service->status == '1' ? 'checked':''}}  />
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
