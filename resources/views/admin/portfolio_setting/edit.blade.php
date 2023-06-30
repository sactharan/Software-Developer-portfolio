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
                        Edit Portfolio Setting
                        <a href="{{ url('admin/portfolio_setting') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                    </h4>
                </div>
                <div class="content">
                        <div class="card-body">
                            <form action="{{url ('admin/portfolio_setting/'.$portfolio->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Title</label>
                                        <input type="text" name="title" value="{{$portfolio->title}}" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Select Category</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($portfolio_categorys as $portfolio_category)
                                                <option value="{{ $portfolio_category->id }}" {{ $portfolio_category->id == $portfolio->category_id ? 'selected' : '' }}>
                                                    {{ $portfolio_category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Image</label>
                                        <img src="{{asset("$portfolio->image")}}" width="60px" height="60px" />
                                        <input type="file" name="image" class="form-control"  >
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label><br/>
                                        <input type="checkbox" name="status" {{ $portfolio->status == '1' ? 'checked':''}}  />
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










