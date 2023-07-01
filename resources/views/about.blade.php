@extends('layouts.main')
@section('custom_title')
    {{ $about['title'] }}
@endsection
@section('content')
    <section id="hero" class="background-image" data-background="{{ Storage::url($about->index) }}"
        style="background-image: url({{ Storage::url($about->index) }})">
        <div class="opacity-mask" data-opacity-mask="rgb(85, 88, 93, 0)" style="background-color: rgba(85, 88, 93, 0);">
            <div class="intro_title error"><img style="width:10%" class="" src="{{ Storage::url($about->icon) }}"
                    alt="Dapoer Mama Jo">
            </div>
        </div>
    </section>
    <div class="mx-5 row gx-0 mb-5 mb-lg-0 justify-content-center">
        <div class="col-lg-10  col-md-9 col-sm-8">
            <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-lg-left">
                    <h4 class="ms-2 h3">{{ $about->title }}</h4>
                    <div class="mx-3 mb-0 px-3 h6">{!! $about->body !!}</div>
                    <a href="/" class="btn btn-primary mt-3 py-3 px-5 ms-4">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
