@extends('admin.layouts.main')
@section('admincontent')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">About</h1>
    </div>
    <div class="table-responsive col-lg-8 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8 col-md-6 col-sm-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <a href="/dashboard/about/create" class="btn btn-danger mb-3" onclick="return confirm('Are You Sure ?')">Reset About</a>
        <table class="table table-striped table-sm col-lg-8 col-md-6 col-sm-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Icon</th>
                    <th>background</th>
                    <th class="w-25">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $about->title }}</td>
                        <td class="col-lg-3 col-md-2 col-sm-1"><img class="img-fluid" src="{{ Storage::url($about->icon) }}"
                                alt="..." /></td>
                        <td class="col-lg-3 col-md-2 col-sm-1"><img class="img-fluid"
                                src="{{ Storage::url($about->index) }}" alt="..." /></td>
                        <td class="container d-flex flex-column text-center">
                            <a href="/dashboard/about/{{ $about->slug }}"
                                class="align-self-center flex-fill col-lg-5 col-md-3 col-sm-2 badge bg-info mb-2">
                                <div class="py-2 px-4"> </div>
                                <span data-feather="eye"></span>
                                <div class="py-2 px-4"> </div>
                            </a>
                            <a href="/dashboard/about/{{ $about->slug }}/edit"
                                class="align-self-center flex-fill col-lg-5 col-md-3 col-sm-2 badge bg-warning mb-2">
                                <div class="py-2 px-4"> </div>
                                <span data-feather="edit"></span>
                                <div class="py-2 px-4"> </div>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
