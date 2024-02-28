@extends('frontend/layouts/main')

@section('title', 'Konveksi')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Konveksi Tukuklik</h1>
            <p class="lead fw-normal text-white-50 mb-0">Jika anda memiliki produk-produk konveksi seperti dibawah..</p>
            <a href="{{ url('frontend/form') }}" class="btn btn-danger text-white mt-3">Daftar vendor konveksi</a>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test1.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Kemeja Kantor</h5>
                            <!-- Product price-->
                            Kemeja Kantor Bahan Taipan
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test3.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Kaos Jersey</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Kaos Jersey Custom
                            {{-- <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00 --}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test5.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Kaos Katun</h5>
                            <!-- Product price-->
                            {{-- <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00 --}}
                            Kaos Katun
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test7.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Jaket Kantor</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Jaket Kantor
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test9.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Baju Batik</h5>
                            <!-- Product price-->
                            {{-- <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00 --}}
                            Baju Batik
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test10.jp')}}g" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Baju Batik</h5>
                            <!-- Product price-->
                            Baju Batik
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test7.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Jaket Kantor</h5>
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
                            Jaket Kantor
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/test1.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Kemeja Kantor</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Kemeja Kantor Bahan Taipan
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail2') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
