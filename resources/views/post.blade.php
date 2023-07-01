@extends('layouts.main')
@section('custom_title')
    {{ $post['title'] }}
@endsection
@section('content')
    <section id="hero" class="background-image col-7" data-background="{{ Storage::url($post->image) }}"
        style="background-image: url({{ Storage::url($post->image) }})">
    </section>
    <div class="mx-5 row gx-0 mb-5 mb-lg-0 justify-content-center">
        <div class="col-lg-10  col-md-9 col-sm-8">
            <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-lg-left">
                    <h4 class="ms-2 h3">{{ $post->title }}</h4>
                    <h6 class="ms-2 h4">Dalam kategori
                        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    </h6>
                    <div class="mx-3 mb-0 px-3 h6">{!! $post->body !!}</div>
                    <a href="/" class="btn btn-primary mt-3 py-3 px-5 ms-4">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
