@extends('layouts.utama')
@section('custom_title')
    {{ $post['title'] }}
@endsection
@section('content')
    <h2>
        {{ $post['title'] }}
    </h2>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
    <a href="/">back</a>
@endsection
