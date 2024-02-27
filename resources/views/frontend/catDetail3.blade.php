@extends('frontend/layouts/main')

@section('content')
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ url('/') }}"><span class="text-danger">Tukuklik</span>Vendor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/catalog2') }}">Catalog</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-danger text-white" type="submit">
                            <i class="bi bi-person-circle me-1"></i>
                            User
                            <!-- <span class="badge bg-danger text-white ms-1 rounded-pill">-></span> -->
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('frontend/img/pouch/test53.jpg') }}" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">POP007 | Tukuklik</div>
                        <h1 class="display-5 fw-bolder">Pouch Premium</h1>
                        <div class="fs-5 mb-3">
                            {{-- <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span> --}}
                            <a href="#" id="linkSpesifikasi" class="product-link">Spesifikasi</a>|
                            <a href="#" id="linkDeskripsi" class="product-link"> Deskripsi Produk</a>
                        </div>
                        <div id="spesifikasi">
                            <!-- Konten Spesifikasi -->
                            <div class="kontenSpek lead" style="text-align: justify;">
                                <p>
                                    Spesifikasi: Pouch Premium $45.00 $40.00
                                </p>
                                <ul>
                                    <li>Spesifikasi 1</li>
                                    <li>Spesifikasi 2</li>
                                    <li>Spesifikasi 3</li>
                                </ul>
                            </div>

                        </div>

                        <div id="deskripsi" style="display: none;">
                            <p class="lead" style="text-align: justify;">
                                Pouch Premium adalah sebuah alat penyimpanan kecil yang dirancang untuk membawa barang-barang kecil seperti uang koin, kartu, kunci, atau peralatan kecil lainnya. Biasanya terbuat dari bahan kain, kulit, atau bahan sintetis, pouch sering digunakan untuk menjaga agar barang-barang tersebut tetap teratur dan mudah diakses saat dibutuhkan. Pouch sering digunakan sebagai aksesori harian atau tambahan untuk tas atau gantungan kunci.</p>
                        </div>

                        <div class="d-flex">
                            {{-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> --}}
                            <button class="btn btn-danger flex-shrink-0 mt-3" type="button" onclick="window.location.href='{{ url('frontend/form2') }}'">
                                <i class="bi bi-box-arrow-right me-1"></i>
                                Daftar Vendor Souvenir
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/pouch/test44.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Pouch Premium</h5>
                                    <!-- Product reviews-->
                                    {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price--> --}}
                                    {{-- $40.00 - $80.00 --}}
                                    Pouch Premium POP007
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                            <!-- Product image-->
                            <img class="card-img-top" src="img/pouch/test48.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Pouch Premium</h5>
                                    <!-- Product reviews-->
                                    {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> --}}
                                    <!-- Product price-->
                                    {{-- <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00 --}}
                                    Pouch Premium POP007
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                            <!-- Product image-->
                            <img class="card-img-top" src="img/pouch/test58.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Pouch Premium</h5>
                                    <!-- Product reviews-->
                                    {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> --}}
                                    <!-- Product price-->
                                    {{-- <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00 --}}
                                    Pouch Premium POP007

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="img/pouch/test38.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Pouch Premium</h5>
                                    <!-- Product reviews-->
                                    {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> --}}
                                    <!-- Product price-->
                                    {{-- $40.00 --}}
                                    Pouch Premium POP007
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Tukuklik 2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        @endsection
