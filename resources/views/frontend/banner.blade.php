@extends('frontend.layouts.main')

@section('container')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/img/home-1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Kolaborasi yang Menguntungkan</h5>
                    <p>Di perusahaan kami, kami percaya pada kerjasama yang saling menguntungkan. Bergabunglah dengan jaringan vendor kami dan nikmati peluang kolaborasi yang luas.</p>
                    <p><a href="{{ url('frontend/form') }}" class="btn btn-danger mt-3">Daftar</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/img/home-2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Peluang Pertumbuhan Bersama</h5>
                    <p>Bergabunglah dengan perusahaan kami untuk mendapatkan peluang pertumbuhan bersama yang tak terbatas.</p>
                    <p><a href="{{ url('frontend/form') }}" class="btn btn-danger mt-3">Daftar</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/img/home-3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Networking yang Luas dan Peluang Ekspansi</h5>
                    <p>Dengan bergabung bersama kami, Anda akan mendapatkan akses ke jaringan yang luas dan peluang ekspansi yang tak terbatas.</p>
                    <p><a href="{{ url('frontend/form') }}" class="btn btn-danger mt-3">Daftar</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
