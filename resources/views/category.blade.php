@extends('layouts.main')


@section('contents')
<div class="footer-bg">
    ㅤ
    <div class="footer-bg">
        ㅤ
        <div class="footer-bg">
            ㅤ
            <div class="footer-bg">
                ㅤ
                <div class="footer-bg">
                    ㅤ
                </div>
            </div>
        </div>
    </div>
</div>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <article class="blog_item col-lg-6 mb-5 mb-lg-5">
                        <div class="blog_item_img">
                            <img class="card-img rounded" src="{{ Storage::url($post->image) }}" alt="">
                            <a href="/post/{{ $post->slug }}" class="blog_item_date">
                                <h3>{{ $post->title }}</h3>
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text-truncate">{{ strip_tags($post->body) }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="ml-5">
            {{ $posts->links() }}
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection
