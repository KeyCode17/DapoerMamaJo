@extends('admin.layouts.main')
@section('admincontent')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    <div class="table-responsive col-lg-8 mb-5">
        <a href="/dashboard/category/create" class="btn btn-primary mb-3">Create New Post</a>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8 col-md-6 col-sm-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped table-sm col-lg-8 col-md-6 col-sm-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th class="w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td class="container d-flex text-center">
                            <a href="/dashboard/category/{{ $category->slug }}/edit"
                                class="align-self-center flex-fill col-lg-5 col-md-3 col-sm-2 badge bg-warning ms-3">
                                <div class="py-2 px-4"> </div>
                                <span data-feather="edit"></span>
                                <div class="py-2 px-4"> </div>
                            </a>
                            <form action="/dashboard/category/{{ $category->slug }}" class="col-lg-5 col-md-3 col-sm-2" method="post">
                                @method('delete')
                                @csrf
                                <button class="align-self-center flex-fill border-0 badge bg-danger" onclick="return confirm('Are You Sure')">
                                    <div class="py-2 px-4"> </div>
                                    <span data-feather="x-circle"></span>
                                    <div class="py-2 px-4"> </div>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
