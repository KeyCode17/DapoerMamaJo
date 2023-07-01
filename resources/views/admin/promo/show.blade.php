@extends('admin.layouts.main')
@section('custom_title')
    {{ $promo['title'] }}
@endsection
@section('admincontent')
    <a href="/dashboard/promo" class="btn btn-success mx-4"><span data-feather="arrow-left"></span> Back</a>
    <a href="/dashboard/promo/{{ $promo->slug }}/edit" class="btn btn-warning mx-4"><span data-feather="edit"></span> Edit</a>
    <form action="/dashboard/promo/{{ $promo->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class="btn btn-danger mx-4" onclick="return confirm('Are You Sure')">
            <span data-feather="x-circle"></span> Delete
        </button>
    </form>
    <h2>
        {{ $promo->title }}
    </h2>
    <div class="col-lg-5 col-md-4 col-sm-2"><img class="align-self-center img-fluid " src="{{ Storage::url($promo->image) }}" alt="..." /></div>
    <div class="mb-5">{!! $promo->body !!}</div>
@endsection
