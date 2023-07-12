@extends('layouts.main')

@section('contents')
    <div class="video_area slider_img_1 zigzag_bg_2 ">
        <div class="video_area_inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video_text">
                            <div class="info">
                                <div class="info_inner">
                                    <h4>Where The Food</h4>
                                    <p>Taste Like Home</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Kenapa Harus Kami -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Kenapa Harus Kami ?</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <h4>±10 Tahun Pelayanan</h4>
                        <p>
                            Telah melayani selama lebih dari 10 tahun, menjadikan kami pilihan yang dapat dipercaya.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-businessman"></i>
                        </div>
                        <h4>Koki Berpengalaman</h4>
                        <p>
                            Koki kami yang berpengalaman untuk hidangan berkualitas tinggi. Kelezatan dan keahlian dalam
                            setiap sajian.
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-dance"></i>
                        </div>
                        <h4>Harga Terjangkau</h4>
                        <p>
                            Menawarkan harga terjangkau tanpa mengorbankan kualitas dan kelezatan pada setiap hidangan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area-end -->

    <!-- video_area_start -->
    <div class="video_area video_bg zigzag_bg_1 zigzag_bg_2 ">
        <div class="video_area_inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="video_text">
                            <div class="info">
                                <div class="info_inner">
                                    <h4>Soto Banjar</h4>
                                    <p>By <strong>Dapoer Mama Jo</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-70">
                        <h3>Post Terbaru</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $index => $post)
                    <div class="col-xl-4 col-md-6">
                        <div class="single_order h-100 d-flex flex-column">
                            <div class="order_thumb mb-auto mt-auto align-items-center">
                                <img src="{{ Storage::url($post->image) }}" class="rounded" alt="">
                            </div>
                            <div class="order_info mt-auto">
                                <h3><a href="">{{ $post->title }}</a></h3>
                                <h5><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                                <p class="text-truncate">{!! strip_tags($post->body) !!}</p>
                                <a href="/post/{{ $post->slug }}" class="boxed_btn mb-4">Read More!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- order_area_end -->
@endsection
