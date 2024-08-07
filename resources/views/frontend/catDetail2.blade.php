@extends('frontend/layouts/main')

@section('title', 'Detail')

@section('content')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('uploads') }}/{{ $productDetail->image }}" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">12-07 | Tukuklik</div>
                        <h1 class="display-5 fw-bolder">{{ $productDetail->name }}</h1>
                        <div class="fs-5 mb-3">
                            {{-- <span class="text-decoration-line-through">$45.00</span>
                            <span>$40.00</span> --}}
                            <a href="#" id="linkSpesifikasi" class="product-link">Spesifikasi</a>|
                            <a href="#" id="linkDeskripsi" class="product-link">Deskripsi</a>
                        </div>
                        <div id="spesifikasi">
                            <!-- Konten Spesifikasi -->
                            <div class="kontenSpek lead" style="text-align: justify;">
                                <p>
                                    {!! nl2br($productDetail->spesifikasi) !!}
                            </div>

                        </div>

                        <div id="deskripsi" style="display: none;">
                            <p class="lead" style="text-align: justify;">
                                {{ $productDetail->deskripsi }}</p>
                        </div>

                        <div class="d-flex">
                            {{-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> --}}
                            <button class="btn btn-danger flex-shrink-0 mt-3" type="button" onclick="window.location.href='{{ url('frontend/form') }}'">
                                <i class="bi bi-box-arrow-right me-1"></i>
                                Daftar Vendor {{ $productDetail->name }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        {{-- <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder">Related products</h2>
                <hr class="hr mb-4"/>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('uploads') }}/{{ $productDetail->image }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5> --}}
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
                                    {{-- {{ $product->name }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto text-white" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100"> --}}
                            <!-- Sale badge-->
                            {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                            <!-- Product image-->
                            {{-- <img class="card-img-top" src="{{ asset('uploads') }}/{{ $productDetail->image }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5> --}}
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
                                    {{-- {{ $product->name }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto text-white" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100"> --}}
                            <!-- Sale badge-->
                            {{-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> --}}
                            <!-- Product image-->
                            {{-- <img class="card-img-top" src="{{ asset('uploads') }}/{{ $productDetail->image }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5> --}}
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
                                    {{-- {{ $product->name }}

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto text-white" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ asset('uploads') }}/{{ $productDetail->image }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5> --}}
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
                                    {{-- {{ $product->name }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-danger mt-auto text-white" href="#">Lihat Detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        @endsection
