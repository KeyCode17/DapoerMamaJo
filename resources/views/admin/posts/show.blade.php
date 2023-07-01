@extends('admin.layouts.main')
@section('custom_title')
    {{ $post['title'] }}
@endsection
@section('admincontent')
    <a href="/dashboard/posts" class="btn btn-success mx-4"><span data-feather="arrow-left"></span> Back</a>
    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mx-4"><span data-feather="edit"></span> Edit</a>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mx-4" onclick="return confirm('Are You Sure')">
            <span data-feather="x-circle"></span> Delete
        </button>
    </form>
    <h2>
        {{ $post->title }}
    </h2>
    <p>By Daffa Karyudi in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <div class="col-lg-5 col-md-4 col-sm-2"><img class="align-self-center img-fluid " src="{{ Storage::url($post->image) }}" alt="..." /></div>
    <div class="mb-5">{!! $post->body !!}</div>
@endsection
