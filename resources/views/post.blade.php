@extends('layouts.main')
@section('custom_title')
    {{ $post['title'] }}
@endsection
@section('contents')
    <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid rounded" src="{{ Storage::url($post->image) }}" alt="">
                </div>
                <div class="blog_details">
                   <h2>
                    {{ $post->title }}
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li>Kategori</li>
                      <li><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                   </ul>
                   {!! $post->body !!}
                </div>
                <button class="button rounded-0 primary-bg text-white btn_1 boxed-btn mt-3 ml-3"
                                    type="button" onclick="window.location.href='/categories/{{ $post->category->slug }}'">Back</button>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->
@endsection