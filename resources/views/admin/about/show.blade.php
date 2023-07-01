@extends('admin.layouts.main')
@section('admincontent')
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8 col-md-6 col-sm-4" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="/dashboard/about/create" class="btn btn-danger mx-4 mb-4" onclick="return confirm('Are You Sure ?')"><span
            data-feather="refresh-ccw"></span> Reset About</a>
    <a href="/dashboard/about/{{ $about->slug }}/edit" class="btn btn-warning mx-4 mb-4"><span data-feather="edit"></span> Edit</a>
    <div  class="mt-4 h2">This is Icon:</div>
    <div class="col-lg-5 col-md-4 col-sm-2 mb-3"><img class="align-self-center img-fluid " src="{{ Storage::url($about->icon) }}"
            alt="..." /></div>
    <div class="mt-2 h2">This is Background:</div>
    <div class="col-lg-5 col-md-4 col-sm-2 mb-3"><img class="align-self-center img-fluid "
            src="{{ Storage::url($about->index) }}" alt="..." /></div>
    <div class="mb-5 mt-5">{!! $about->body !!}</div>
@endsection
