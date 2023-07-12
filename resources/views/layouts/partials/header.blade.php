<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-backdrop="false">
    <form method="POST" action="/" class="mb-5">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Order Form</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            Data telah diterima, terima kasih
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" required autofocus value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">No Whatsapp</label>
                        <input type="number" class="form-control @error('kontak') is-invalid @enderror" id="kontak"
                            name="kontak"value="{{ old('kontak') }}" required>
                        @error('kontak')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="success">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://www.google.com/chrome/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center justify-content-center">
					<div class="col-xl-2 col-lg-2 d-none d-lg-block border-0 mr-3">
						ㅤ
                    </div>
                    <div class="col-xl-7 col-lg-7 ml-4.5">
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul class="mein_menu_list" id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About</a></li>
                                    <div class="logo-img d-none d-lg-block">
                                        <a href="/">
                                            <img src="{{ asset('img/logo.png') }}" alt="">
                                        </a>
                                    </div>
                                    <li><a href="javascript:void(0);">Produk Kami <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a href="/categories/{{ $category->slug }}">
                                                        {{ $category->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="/promos">Promo</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block ml-5">
                        <div class="custom_order" data-toggle="modal" data-target="#exampleModal">
                            <a href="javascript:void(0);" class="boxed_btn_white">Order Now</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                    <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                        <a href="/">
                            <img src="{{ asset('img/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->
