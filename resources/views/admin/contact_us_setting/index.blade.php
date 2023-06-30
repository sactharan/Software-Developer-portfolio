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
                        Contact US List
                        {{-- <a href="{{ url('admin/edu_setting/create') }}" class="btn btn-primary btn-sm text-white float-end">
                            Add Education
                        </a> --}}
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact_uss as $contact_us)
                                <tr>
                                    <td>{{ $contact_us->id }}</td>
                                    <td>{{ $contact_us->name }}</td>
                                    <td>{{ $contact_us->email }}</td>
                                    <td>{{ $contact_us->subject }}</td>
                                    <td>{{ $contact_us->message }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
