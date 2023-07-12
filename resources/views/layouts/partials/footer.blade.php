<!-- footer-start -->
<footer class="footer_area footer-bg zigzag_bg_1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="heading">
                            Site Maps
                        </h3>
                        <ul>
                            <li><a href="/">Home</a>
                            </li>
                            <li><a href="/about">About Us</a>
                            </li>
                            <li><a href="/promos">Promo</a>
                            </li>
                            <li><a href="/login">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2 d-lg-block d-none">
                    <div class="footer_widget">
                        <h3 class="heading">
                            ㅤ
                        </h3>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="heading">
                            Produk Kami
                        </h3>
                        <ul>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="/categories/{{ $category->slug }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2 d-lg-block d-none">
                    <div class="footer_widget">
                        <h3 class="heading">
                            ㅤ
                        </h3>
                    </div>
                </div>
                <div class="logo-img d-none d-lg-block ml-5">
                    <a href="/">
                        <img src="{{ asset('img/logo.png') }}" class="ml-3" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-md-12 col-lg-8">
                    <div class="copyright">
                        <p class="footer-text">
                            &copy; Dapoer Mama Jo
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->
