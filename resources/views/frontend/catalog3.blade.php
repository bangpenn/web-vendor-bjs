@extends('frontend/layouts/main')

@section('title', 'Souvenir')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Souvenir Tukuklik</h1>
            <p class="lead fw-normal text-white-50 mb-0">Jika anda memiliki produk-produk Souvenir seperti dibawah..</p>
            <a href="{{ url('frontend/form') }}" class="btn btn-danger text-white mt-3">Daftar vendor Souvenir</a>
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
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AE001_1.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Eksklusif A5</h5>
                            <!-- Product price-->
                            Agenda Eksklusif A5 AE001
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AP001_1.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Premium</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Agenda Premium A6
                            {{-- <span class="text-muted text-decoration-line-through">$20.00</span>
                            $18.00 --}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AP002_1.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Premium</h5>
                            <!-- Product price-->
                            {{-- <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00 --}}
                            Agenda Premium A5
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AP004_1.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Premium</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Agenda Premium Material Kulit
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AS001_1.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Standard</h5>
                            <!-- Product price-->
                            {{-- <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00 --}}
                            Agenda Standard A5
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AS 003_1 polos.JPG')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Standard</h5>
                            <!-- Product price-->
                            Agenda Standard A6
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AS004_1.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Standard</h5>
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
                            Agenda Standard A5
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/AS 005_1.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Agenda Standard</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Agenda Standard A5
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>

            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/REVISI  SSG001_2.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Alat Set Makan</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Alat Set Makan
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/SSG002_1 KOTAK.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Alat Set Makan</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Alat Set Makan
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/SSG003.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Alat Set Makan</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Alat Set Makan
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/souvenir/SSG005.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Alat Set Makan</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Alat Set Makan
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ url('frontend/catDetail3') }}">Lihat Detail</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
