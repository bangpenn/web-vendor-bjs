@extends('frontend.layouts.main');
@section('container');
      <!-- portfolio strats -->
      <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Projects</h2>
                        <p>Kami berkomitmen untuk memberikan dampak positif dalam setiap langkah.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/percetakkan.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">Konveksi</h3>
                            <p class="lead">Ingin bergabung sebagai vendor? Klik tombol di bawah untuk mendaftar sekarang!</p>
                            <a href="formKonveksi.html" class="btn btn-danger text-white">Daftar</a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/gift-set.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">ATK</h3>
                            <p class="lead">Ingin bergabung sebagai vendor? Klik tombol di bawah untuk mendaftar sekarang!</p>
                            <a href="formAtk.html" class="btn btn-danger text-white">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/percetakkan.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">Percetakkan</h3>
                            <p class="lead">Ingin bergabung sebagai vendor? Klik tombol di bawah untuk mendaftar sekarang!</p>
                            <a href="formPercetakkan.html" class="btn btn-danger text-white">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/gift-set.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">Souvenir</h3>
                            <p class="lead">Ingin bergabung sebagai vendor? Klik tombol di bawah untuk mendaftar sekarang!</p>
                            <a href="formSouvenir.html" class="btn btn-danger text-white">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- portfolio ends -->
@endsection
