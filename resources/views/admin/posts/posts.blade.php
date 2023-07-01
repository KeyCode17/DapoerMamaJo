@extends('admin.layouts.main')
@section('admincontent')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    <div class="table-responsive col-lg-8 mb-5">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8 col-md-6 col-sm-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped table-sm col-lg-8 col-md-6 col-sm-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th class="w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td class="col-lg-3 col-md-2 col-sm-1"><img class="img-fluid" src="{{ Storage::url($post->image) }}"
                                alt="..." /></td>
                        <td class="container d-flex flex-column text-center">
                            <a href="/dashboard/posts/{{ $post->slug }}"
                                class="align-self-center flex-fill col-lg-5 col-md-3 col-sm-2 badge bg-info mb-2">
                                <div class="py-2 px-4"> </div>
                                <span data-feather="eye"></span>
                                <div class="py-2 px-4"> </div>
                            </a>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                                class="align-self-center flex-fill col-lg-5 col-md-3 col-sm-2 badge bg-warning mb-2">
                                <div class="py-2 px-4"> </div>
                                <span data-feather="edit"></span>
                                <div class="py-2 px-4"> </div>
                            </a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="align-self-center flex-fill col-lg-5 col-md-3 col-sm-2 border-0 badge bg-danger mb-2" onclick="return confirm('Are You Sure')">
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
