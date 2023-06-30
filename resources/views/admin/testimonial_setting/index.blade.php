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
                        Testimonials List
                        <a href="{{ url('admin/testimonial_setting/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add Testimonials
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Review</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $testimonial->id }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->job }}</td>
                                    <td>{{ $testimonial->review }}</td>
                                    <td>{{ $testimonial->image }}</td>
                                    <td>{{ $testimonial->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/testimonial_setting/' . $testimonial->id . '/edit') }}"class="btn btn-success">Edit</a>
                                        <a href="{{ url('admin/testimonial_setting/' . $testimonial->id . '/delete') }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
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
