@extends('layouts.main')


@section('content')
<h1 class="mt-5">Promo!</h1>
    @foreach ($promos as $promo)
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ Storage::url($promo->image) }}" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h1 class="display-6">{{ $promo->title }}</h1>
                        </div>
                        <p class="text-truncate">{{ strip_tags($promo->body) }}</p>
                        <a href="/promos/{{ $promo->slug }}" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
