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
                        Skills List
                        <a href="{{ url('admin/skill_setting/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add Skills
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Skill</th>
                                <th>Percentage</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($skills as $skill)
                                <tr>
                                    <td>{{ $skill->id }}</td>
                                    <td>{{ $skill->skill }}</td>
                                    <td>{{ $skill->percentage }}</td>
                                    <td>{{ $skill->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a href="{{ url('admin/skill_setting/' . $skill->id . '/edit') }}"class="btn btn-success">Edit</a>
                                        <a href="{{ url('admin/skill_setting/' . $skill->id . '/delete') }}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger">Delete</a>
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
