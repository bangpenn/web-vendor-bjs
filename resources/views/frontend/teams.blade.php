@extends('frontend.layouts.main');
@section('container');
      <!-- team starts -->
      <section class="team section-padding" id="team">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-header text-center pb-5">
                      <h2>Our Team</h2>
                      <p>Tim Ahli <br>Hasil Luar Biasa</p>
                      <div class="col-12 col-md-6 col-lg-3 mx-auto">
                          <div class="card text-center">
                              <div class="card-body">
                                  <img src="{{ asset('frontend/img/team-1.jpg') }}" alt="" class="img-fluid rounded-circle">
                              <h3 class="card-title py-2">Budi Santoso</h3>
                              <p class="card-text">Project Director</p>


                              <p class="socials">
                                  <i class="bi bi-twitter text-dark mx-1"></i>
                              <i class="bi bi-facebook text-dark mx-1"></i>
                              <i class="bi bi-linkedin text-dark mx-1"></i>
                              <i class="bi bi-instagram text-dark mx-1"></i>
                              </p>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
          <div class="row">

              <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                      <div class="card-body">
                          <img src="{{ asset('frontend/img/team-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Eka</h3>
                      <p class="card-text">Chief Operating Officer</p>
                      <p class="socials">
                          <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                      <div class="card-body">
                          <img src="{{ asset('frontend/img/team-2.jpg') }}" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Gido</h3>
                      <p class="card-text">Chief Technology Officer</p>
                      <p class="socials">
                          <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                      <div class="card-body">
                          <img src="{{ asset('frontend/img/team-3.jpg') }}" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Fofo</h3>
                      <p class="card-text">Chief Marketing Officer</p>
                      <p class="socials">
                          <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 col-lg-3">
                  <div class="card text-center">
                      <div class="card-body">
                          <img src="{{ asset('frontend/img/team-4.jpg') }}" alt="" class="img-fluid rounded-circle">
                      <h3 class="card-title py-2">Dini</h3>
                      <p class="card-text">Chief financial officer</p>
                      <p class="socials">
                          <i class="bi bi-twitter text-dark mx-1"></i>
                      <i class="bi bi-facebook text-dark mx-1"></i>
                      <i class="bi bi-linkedin text-dark mx-1"></i>
                      <i class="bi bi-instagram text-dark mx-1"></i>
                      </p>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </section>

    <!-- team ends -->

@endsection
