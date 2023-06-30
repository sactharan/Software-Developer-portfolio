@extends('layouts.admin')

@section('title', 'Admin Education Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4>
                        Edit Education Setting
                        <a href="{{ url('admin/edu_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">
                        <div class="card-body">
                            <form action="{{url('admin/edu_setting/'.$education->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Title</label>
                                    <input type="text"  name="title" value="{{ $education->title}}" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Univeristy</label>
                                    <input type="text"  name="university" value="{{ $education->university}}" class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Start Date</label>
                                    <input type="text"  name="start_to" value="{{ $education->start_to}}" class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">End Date</label>
                                    <input type="text"  name="end_to"  value="{{ $education->end_to}}" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" id=""  class="form-control" rows="3">{{ $education->description}}</textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Status</label><br/>
                                    <input type="checkbox" name="status" {{ $education->status == '1' ? 'checked':''}}  />
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
