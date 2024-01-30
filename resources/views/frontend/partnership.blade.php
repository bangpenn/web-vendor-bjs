@extends('frontend.layouts.main');
@section('container');
    <!-- Partnership -->
    <section id="partner">
        <div class="container mb-5">
            <div class="row text-center">
                <h2 class="display-6">
                    Partnership
                </h2>
                <p class="display-6 mt-lg-2">
                    Tukuklik.com telah terdaftar dan terkualifikasi pada LPSE dan SIKaP, serta menjadi mitra resmi
                    E-Catalogue, Toko Daring, SIMPeL Kemenkeu, dan PaDI UMKM.
                </p>
            </div>
            <div class="logo-container crop-img">
                <img src="{{ asset('frontend/assets/LKPP.png') }}" alt="logo 1" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/belapengadaan.png') }}" alt="logo 2" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/padiumkm.svg') }}" alt="logo 3" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/lpse.png') }}" alt="logo 4" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/sikap.png') }}" alt="logo 5" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/simpel.png') }}" alt="logo 6" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/ecatalogue.png') }}" alt="logo 7" class="img-fluid" width="120" height="120">
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <p class="display-6 mt-lg-2">
                    Kami sudah dipercaya dan telah bekerjasama dengan lebih dari 430 instansi, BUMN, maupun Swasta.
                </p>
            </div>
            <div class="logo-container crop-img">
                <img src="{{ asset('frontend/assets/pertamina.png') }}" alt="logo 8" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/bni.png') }}" alt="logo 9" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/perkebunan.png') }}" alt="logo 10" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/bankjatim.png') }}" alt="logo 11" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/pln.png') }}" alt="logo 12" class="img-fluid" width="80" height="80">
                <img src="{{ asset('frontend/assets/telkom.webp') }}" alt="logo 13" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/bri.png') }}" alt="logo 14" class="img-fluid" width="80" height="80">
                <img src="{{ asset('frontend/assets/kemenkeu.png') }}" alt="logo 15" class="img-fluid" width="70" height="70">
                <img src="{{ asset('frontend/assets/sier.png') }}" alt="logo 16" class="img-fluid" width="55" height="55">
                <img src="{{ asset('frontend/assets/taspen.png') }}" alt="logo 17" class="img-fluid" width="80" height="80">
                <img src="{{ asset('frontend/assets/pos.png') }}" alt="logo 18" class="img-fluid" width="100" height="100">
                <img src="{{ asset('frontend/assets/waskita.png') }}" alt="logo 19" class="img-fluid" width="80" height="80">
                <img src="{{ asset('frontend/assets/kominfo.png') }}" alt="logo 20" class="img-fluid" width="80" height="80">
                <img src="{{ asset('frontend/assets/jember.png') }}" alt="logo 21" class="img-fluid" width="80" height="80">
                <img src="{{ asset('frontend/assets/djp.png') }}" alt="logo 22" class="img-fluid" width="40" height="40">
                <img src="{{ asset('frontend/assets/pelindo.png') }}" alt="logo 23" class="img-fluid" width="130" height="130">


            </div>
        </div>
    </section>

    {{-- partnership ends --}}

@endsection
