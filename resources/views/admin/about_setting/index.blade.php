@extends('layouts.admin')

@section('title', 'About Setting')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif
                <div class="header">
                    <h4 class="title">About Settings</h4>
                </div>
                <div class="content">

                    <form action="{{ url('/admin/about_setting') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" class="form-control" rows="3">{{ $about_setting->description ?? '' }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Title</label>
                                    <input type="text" value="{{ $about_setting->title ?? '' }}" name="title"
                                        class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Title Description</label>
                                    <input type="text" value="{{ $about_setting->title_description ?? '' }}"
                                        name="title_description" class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">Birthdate</label>
                                    <input type="date" value="{{ $about_setting->birth_date ?? '' }}" name="birth_date"
                                        class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">Age</label>
                                    <input type="text" value="{{ $about_setting->age ?? '' }}" name="age"
                                        class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">Website</label>
                                    <input type="text" value="{{ $about_setting->website ?? '' }}" name="website"
                                        class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">Degree</label>
                                    <input type="text" value="{{ $about_setting->degree ?? '' }}" name="degree"
                                        class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">Phone</label>
                                    <input type="text" value="{{ $about_setting->phone ?? '' }}" name="phone"
                                        class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">Email</label>
                                    <input type="text" value="{{ $about_setting->email ?? '' }}" name="email"
                                        class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">City</label>
                                    <input type="text" value="{{ $about_setting->city ?? '' }}" name="city"
                                        class="form-control" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="">Freelance</label>
                                    <input type="text" value="{{ $about_setting->freelance ?? '' }}" name="freelance"
                                        class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Upload Image</label>
                                    <input type="file" name="image" class="form-control" />
                                    @if (isset($about_setting->image))
                                        <img src="{{ asset($about_setting->image) }}" alt="Uploaded Image"
                                            style="max-width: 200px; margin-top: 10px;">
                                    @endif
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
