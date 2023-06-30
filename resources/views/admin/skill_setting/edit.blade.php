@extends('layouts.admin')

@section('title', 'Admin Skill Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
                <div class="header">
                    <h4>
                        Edit Skill Setting
                        <a href="{{ url('admin/skill_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">
                        <div class="card-body">
                            <form action="{{url('admin/skill_setting/'.$skill->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Skill</label>
                                    <input type="text"  name="skill" value="{{ $skill->skill}}" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Percentage</label>
                                    <input type="text"  name="percentage" value="{{ $skill->percentage}}" class="form-control" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Status</label><br/>
                                    <input type="checkbox" name="status" {{ $skill->status == '1' ? 'checked':''}}  />
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary text-white">Update Setting</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
