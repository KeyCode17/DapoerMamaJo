@extends('admin.main')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    
    @yield('adminstyles')
@endsection
@section('content')

    <body>
        @include('admin.layouts.header')
        <div class="container-fluid ">
            <div class="row">
                @include('admin.layouts.sidebar')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    @yield('admincontent')
                </main>
            </div>
        </div>
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
    </body>
@endsection
