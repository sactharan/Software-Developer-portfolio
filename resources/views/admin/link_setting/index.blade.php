@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        Links List
                        <a href="{{ url('admin/link_setting/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add Links
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Link</th>
                                    <th>Class</th>
                                    <th>Icon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($links as $link)
                                    <tr>
                                        <td>{{ $link->id }}</td>
                                        <td>{{ $link->link }}</td>
                                        <td>{{ $link->class }}</td>
                                        <td>{{ $link->icon }}</td>
                                        <td>{{ $link->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                        <td>
                                            <a href="{{ url('admin/link_setting/' . $link->id . '/edit') }}"class="btn btn-success">Edit</a>
                                            <a href="{{ url('admin/link_setting/' . $link->id . '/delete') }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
