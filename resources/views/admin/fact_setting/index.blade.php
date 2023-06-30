@extends('layouts.admin')

@section('title', 'Admin Facts Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4 class="title">Facts Settings</h4>
                </div>
                <div class="content">

                    <form action="{{ url('/admin/fact_setting') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Clients</label>
                                    <input type="text" value="{{ $fact_setting->clients ?? ''}}" name="clients" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Projects</label>
                                    <input type="text" value="{{ $fact_setting->projects ?? ''}}" name="projects" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Hours of Support</label>
                                    <input type="text" value="{{ $fact_setting->hours_of_support ?? ''}}" name="hours_of_support" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Hard Workers</label>
                                    <input type="text" value="{{ $fact_setting->hard_workers ?? ''}}" name="hard_workers" class="form-control" />
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
