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
                        Education List
                        <a href="{{ url('admin/edu_setting/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add Education
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>University</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($educations as $education)
                                <tr>
                                    <td>{{ $education->id }}</td>
                                    <td>{{ $education->title }}</td>
                                    <td>{{ $education->university }}</td>
                                    <td>{{ $education->start_to }}</td>
                                    <td>{{ $education->end_to }}</td>
                                    <td>{{ $education->description }}</td>
                                    <td>{{ $education->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/edu_setting/' . $education->id . '/edit') }}"class="btn btn-success">Edit</a>
                                        <a href="{{ url('admin/edu_setting/' . $education->id . '/delete') }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    {{-- <div>{{ $educations->links() }}</div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
