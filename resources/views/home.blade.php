@extends('layouts.main')
@section('styles')
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        .swiper {
            width: 90%;
            height: 39vw;
        }

        .index1ph {
            width: 100%;
            height: 39vw;
        }

        .swiper-slide {
            text-align: center;
            font-size: 1px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 80vw;
            height: 100vw;
            object-fit: cover;
        }

        .swiper-slide img.difference {
            width: 100%;
            height: 150%;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-button-next:after {
            font-size: 6vw;
            color: #113199;
        }

        .swiper-button-prev:after {
            font-size: 6vw;
            color: #113199;
        }

        .swiper-pagination-bullet-active {
            background: #113199;
        }

        a:link {
            text-decoration: none;
        }

        a:hover {
            color: #708C9B;
            text-decoration: underline;
        }
    </style>
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
    <section>
        <div class="container margin_60">

            <div class="main_title">
                <h2>Kenapa <span>Harus</span> Kami?</h2>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="feature_home">
                        <i class="bi bi-calendar-check"></i>
                        <h3><span>10 Tahun</span> Melayani</h3>
                        <p>
                            Telah melayani dengan kepercayaan selama lebih dari 10 tahun, menjadikan kami pilihan yang dapat
                            dipercaya.
                        </p>
                        <a href="#" class="btn_1 outline">Read more</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature_home">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <h3><span>Juru Masak</span> Berpengalaman</h3>
                        <p>
                            Juru masak berpengalaman kami untuk hidangan berkualitas tinggi. Kelezatan dan keahlian dalam
                            setiap sajian.
                        </p>
                        <a href="#" class="btn_1 outline">Read more</a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="feature_home">
                        <i class="bi bi-cash"></i>
                        <h3><span>Harga </span>Terjangkau</h3>
                        <p>
                            Menawarkan harga terjangkau tanpa mengorbankan kualitas dan kelezatan pada setiap hidangan.
                        </p>
                        <a href="#" class="btn_1 outline">Read more</a>
                    </div>
                </div>
            </div>
            <!--End row -->
        </div>
    </section>
    @foreach ($posts as $index => $post)
        <div class="mx-5 row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-5 col-md-4 col-sm-2"><img class="img-fluid" src="{{ Storage::url($post->image) }}" alt="..." /></div>
            <div class="col-lg-5 col-md-4 col-sm-2 {{ $index % 2 == 0 ? 'order-lg-last' : 'order-lg-first' }}">
                <div class="text-center h-100 project" style="background-color:#55585d">
                    <div class="d-flex h-100">
                        <div
                            class="project-text w-100 my-auto text-center {{ $index % 2 == 0 ? 'text-lg-right' : 'text-lg-left' }}">
                            <h4 class="text-white h3"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h4>
                            <h6 class="text-white h4"><a
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                            <div class="mx-3 mb-0 text-white-50 text-truncate px-3 h6">{!! strip_tags($post->body) !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="swiper mySwiper mt-5 mb-3">
        <div class="swiper-wrapper">
            @foreach ($pictures as $picture)
                <div class="swiper-slide">
                    <img src="{{ Storage::url($picture->image) }}" alt="Picture">
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
@endsection
