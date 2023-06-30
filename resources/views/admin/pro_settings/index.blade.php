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
                        Profession List
                        <a href="{{ url('admin/pro_settings/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add Profession
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Address</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Point 1</th>
                                <th>Point 2</th>
                                <th>Point 3</th>
                                <th>Point 4</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($professions as $profession)
                                <tr>
                                    <td>{{ $profession->id }}</td>
                                    <td>{{ $profession->title }}</td>
                                    <td>{{ $profession->address }}</td>
                                    <td>{{ $profession->start_to }}</td>
                                    <td>{{ $profession->end_to }}</td>
                                    <td>{{ $profession->point1 }}</td>
                                    <td>{{ $profession->point2 }}</td>
                                    <td>{{ $profession->point3 }}</td>
                                    <td>{{ $profession->point4 }}</td>
                                    <td>{{ $profession->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/pro_settings/' . $profession->id . '/edit') }}"class="btn btn-success">Edit</a>
                                        <a href="{{ url('admin/pro_settings/' . $profession->id . '/delete') }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                        {{-- <div>{{ $products->links() }}</div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
