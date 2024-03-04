@extends('frontend/layouts/main')

@section('title', $category->name)

@section('content')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">{{ $category->name }} Tukuklik</h1>
            <p class="lead fw-normal text-white-50 mb-0">Jika anda memiliki produk-produk {{ $category->name }} seperti dibawah..</p>
            <a href="{{ url('frontend/form') }}" class="btn btn-danger text-white mt-3">Daftar vendor {{ $category->name }}</a>
        </div>
    </div>
</header>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5">
            @foreach($categoryProducts as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('uploads') }}/{{ $product->image }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $product->name }}</h5>
                            <!-- Product price-->
                            {{ $product->spesifikasi }}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="text-center">
                        @if(isset($productDetail))

                            <a class="btn btn-outline-danger mt-auto view-details text-white" href="{{ route('catalog.product.detail', ['productId' => $product->id, 'productDetailId' => $product->productDetail->id]) }}">Lihat Detail Produk</a>

                        @endif
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
