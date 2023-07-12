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
                @foreach ($promos as $promo)
                    <article class="blog_item col-lg-6 mb-5 mb-lg-5">
                        <div class="blog_item_img">
                            <img class="card-img rounded" src="{{ Storage::url($promo->image) }}" alt="">
                            <a href="/post/{{ $promo->slug }}" class="blog_item_date">
                                <h3>{{ $promo->title }}</h3>
                            </a>
                        </div>
                        <div class="blog_details">
                            <p class="text-truncate">{{ strip_tags($promo->body) }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="ml-5">
            {{ $promos->links() }}
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection