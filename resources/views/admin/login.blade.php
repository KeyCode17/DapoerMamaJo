@extends('admin.main')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
@endsection
@section('content')
    <body>
        <form class="form-signin" action="/login" method="post">
            @csrf
            @if (session()->has('LoginError'))
                <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                    {{ session('LoginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif
            <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
            <label for="name" class="sr-only">User</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="User"
                name="name" required autofocus value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            <a href="/" class="text-end">
                <p class="mt-5 mb-3 text-muted">Back Home</p>
            </a>
        </form>
    @endsection
