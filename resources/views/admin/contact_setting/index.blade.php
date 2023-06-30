@extends('layouts.admin')

@section('title', 'Admin Home Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4 class="title">Contact Settings</h4>
                </div>
                <div class="content">

                    <form action="{{ url('/admin/contact_setting') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Address</label>
                                    <input type="text" value="{{ $contact_setting->address ?? ''}}" name="address" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Email</label>
                                    <input type="text" value="{{ $contact_setting->email ?? ''}}" name="email" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Phone</label>
                                    <input type="text" value="{{ $contact_setting->phone ?? ''}}" name="phone" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Location</label>
                                    <input type="text" value="{{ $contact_setting->location ?? ''}}" name="location" class="form-control" />
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
