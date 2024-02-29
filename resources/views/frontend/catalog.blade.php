@extends('frontend/layouts/main')

@section('title', $category->name)

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">{{ $category->name }} Tukuklik</h1>
            <p class="lead fw-normal text-white-50 mb-0">Jika anda memiliki produk-produk {{ $category->name }} seperti dibawah..</p>
            <a href="{{ url('frontend/form') }}" class="btn btn-danger text-white mt-3">Daftar vendor konveksi</a>
        </div>
    </div>
</header>

<section class="py-5">
    {{-- @isset($categoryProducts) --}}
        @foreach($categoryProducts as $product)
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{ asset('uploads') }}/{{ $product->image }}" alt="..." />
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
                        <div class="text-center">
                            <a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ route('catalog.product.detail', ['categoryId' => $category->id, 'productId' => $product->id]) }}">Lihat Detail</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
{{-- @endisset --}}
</section>
@endsection
