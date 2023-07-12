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
    <!-- single_about_area_start -->
    <div class="single_about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="single_about_text">
                        <h3>About Us</h3>
                        {!! $about->body !!}
                        <div class="button rounded-0 primary-bg text-white btn_1 boxed-btn mt-4 ml-3" data-toggle="modal" data-target="#exampleModal">
                            <div class="custom_order">
                                <a href="javascript:void(0);" >Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 offset-lg-1">
                    <div class="single_about_thumb thumb_n1">
                        <img src="{{ Storage::url($about->index) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single_about_area_end -->
@endsection
