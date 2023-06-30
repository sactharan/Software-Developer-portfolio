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
                        Category List
                        <a href="{{ url('admin/category_setting/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add Category
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/category_setting/' . $category->id . '/edit') }}"class="btn btn-success">Edit</a>
                                        <a href="{{ url('admin/category_setting/' . $category->id . '/delete') }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
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
