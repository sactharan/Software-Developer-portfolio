@extends('layouts.admin')

@section('title', 'Admin Link Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4>
                        Edit Link Setting
                        <a href="{{ url('admin/link_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">
                        <div class="card-body">
                            <form action="{{url ('admin/link_setting/'.$link->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Link</label>
                                        <input type="text" name="link" value="{{$link->link}}" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Class</label>
                                        <input type="text" name="class" value="{{$link->class}}" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Icon</label>
                                        <input type="text" name="icon" value="{{$link->icon}}" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label><br/>
                                        <input type="checkbox" name="status" {{ $link->status == '1' ? 'checked':''}}  />
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










