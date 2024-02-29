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
{{-- @isset($categoryProducts) --}}
    @foreach($categoryProducts as $product)
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 1.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $product->name }}</h5>
                            <!-- Product price-->
                            {{ $product->name }}
                            {{ $product->name }}
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 2.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $product->name }}</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            {{ $product->name }} Taslan
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 3.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Kaos Jersey</h5>
                            <!-- Product price-->
                            {{-- <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00 --}}
                            Kaos Jersey
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 4.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Seragam Kantor</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Seragam Kantor
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 5.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Baju Polo</h5>
                            <!-- Product price-->
                            {{-- <span class="text-muted text-decoration-line-through">$50.00</span>
                            $25.00 --}}
                            Baju Polo CVC
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 6.jp')}}g" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Baju Polo</h5>
                            <!-- Product price-->
                            Baju Polo
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 7.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Kaos Custom</h5>
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
                            Kaos Custom
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 8.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Baju Polo</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Baju Polo Combed
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 9.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Topi Drill</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Topi Drill Bordir
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 10.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Topi Golf</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Topi Golf Bordir
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 11.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Topi Dinas</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Topi Dinas Bordir
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
                    <img class="card-img-top" src="{{ asset('frontend/img/konveksi/coba 12.jpg')}}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Topi Rimba</h5>
                            <!-- Product reviews-->
                            {{-- <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div> --}}
                            <!-- Product price-->
                            Topi Rimba Sablon
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
    @endforeach
{{-- @endisset --}}
</section>


@endsection
