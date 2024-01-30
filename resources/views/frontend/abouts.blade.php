@extends('layouts.main');
@section('container');
    <!-- about section starts -->
    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="{{ asset('frontend/img/about.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>Berkualitas Terbaik <br/> Layanan yang Pernah Ada</h2>
                        <p>Dengan bergabung bersama kami, Anda akan mendapatkan akses ke jaringan yang luas dan peluang ekspansi yang tak terbatas. Kami percaya pada pertumbuhan bersama dan memberikan platform bagi vendor untuk mencapai potensi penuh mereka. Mari bersama-sama mengeksplorasi peluang baru dan menghadirkan inovasi. <br> Tunggu apa lagi??</p>
                        <a href="{{ url('frontend/form') }}" class="btn btn-danger">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section Ends -->
@endsection
