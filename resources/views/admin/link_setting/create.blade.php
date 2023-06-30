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
                        Add Link Setting
                        <a href="{{ url('admin/link_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">

                    <form action="{{ url('admin/link_setting/create') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Link</label>
                                    <input type="text"  name="link" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Class</label>
                                    <input type="text"  name="class" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Icon</label>
                                    <input type="text"  name="icon" class="form-control" />
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
