<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Header Plain:  add the id plain to header and change logo.png to logo_sticky.png ======================= -->
<header id="colored">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    <h1><a>Dapoer Mama Jo</a></h1>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu
                        mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <h4 src="" width="160" height="34" alt="Dapoer mama jo">Dapoer mama jo</h4>
                    </div>
                    <a href="javascript:void(0);" class="open_close" id="close_in"><i class="bi bi-x-lg"></i></a>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Produk Kami<i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="/promos">Promo</a>
                        </li>
                        <li class="submenu">
                            <a href="/about">Tentang</a>
                        </li>
                    </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="search-overlay-menu-btn">
                            <a href="javascript:void(0);"><i class="bi bi-cart-dash"></i></a>
                        </div><!-- End dropdown-cart-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <form method="POST" action="/" class="mb-5">
                                @csrf
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Order Form</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            @if (session()->has('success'))
                                                <div class="alert alert-success" role="alert">
                                                    Data telah diterima, terima kasih
                                                </div>
                                            @endif
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text"
                                                    class="form-control @error('nama') is-invalid @enderror"
                                                    id="nama" name="nama" required autofocus
                                                    value="{{ old('nama') }}">
                                                @error('nama')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="kontak" class="form-label">No Whatsapp</label>
                                                <input type="number"
                                                    class="form-control @error('kontak') is-invalid @enderror"
                                                    id="kontak" name="kontak"value="{{ old('kontak') }}" required>
                                                @error('kontak')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="success">Save
                                                changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown dropdown-cart">
                        </div><!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->
