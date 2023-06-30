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
                        Portfolio List
                        <a href="{{ url('admin/portfolio_setting/create') }}"
                            class="btn btn-primary btn-sm text-white float-end">
                            Add Portfolio
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($portfolios as $portfolio)
                                <tr>
                                    <td>{{ $portfolio->id }}</td>
                                    <td>
                                        @if ($portfolio->category)
                                            {{ $portfolio->category->title }}
                                        @else
                                            No Category
                                        @endif
                                    </td>
                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->image }}</td>
                                    <td>{{ $portfolio->status == '1' ? 'Hidden' : 'Visible' }}</td>
                                    <td>
                                        <a
                                            href="{{ url('admin/portfolio_setting/' . $portfolio->id . '/edit') }}"class="btn btn-success">Edit</a>
                                        <a href="{{ url('admin/portfolio_setting/' . $portfolio->id . '/delete') }}"
                                            onclick="return confirm('Are you sure you want to delete this?')"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7">No Portfolios Available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- <div>{{ $products->links() }}</div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
