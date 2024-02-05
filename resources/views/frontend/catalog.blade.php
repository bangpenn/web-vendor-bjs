<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tukuklik | Website Vendor Management Systems</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />


</head>
<body>

    {{-- <button type="button" id="btn" style="display: none;">Login</button>
      {{-- <script src="dist/sweetalert2.all.min.js"></script>
      <!-- Letakkan script ini di bawah elemen HTML yang diinginkan atau gunakan event DOMContentLoaded -->
      <script>
          document.addEventListener('DOMContentLoaded', function () {
              Swal.fire({
                  title: "Contoh Baju",
                  html: "<div class='text-center'>Apakah anda memiliki spesifikasi yang persis dengan gambar?</div>",
                  imageUrl: "{{ asset('frontend/img/konveksi/test2.jpg') }}", // Pastikan URL gambar ini benar
                  imageWidth: 200,
                  imageHeight: 280,
                  showDenyButton: true,
                  showCancelButton: true,
                  confirmButtonText: "Punya dong",
                  denyButtonText: `Loh gapunya`,
                  allowOutsideClick: false,
                  showCloseButton: true
              }).then((result) => {
                  /* Read more about isConfirmed, isDenied below */
                  if (result.isConfirmed) {
                      Swal.fire("Lanjut isi Form!", "", "success").then(() => {
                          window.location.href = "{{ url('frontend/form') }}";
                      });

                  } else if (result.isDenied) {
                      Swal.fire("Cari yang lain", "", "error").then(() =>{
                        window.location.href = "{{ url('/') }}";
                      });
                  }
              }); --}}

        {{-- //     Swal.fire({
        //           title: "Spesifikasi!!!",
        //           text: "Pastikan spesifikasi sesuai dengan yang dibutuhkan.",
        //           icon: "warning",
        //           showDenyButton: true,
        //           showCancelButton: true,
        //           showCloseButton: true,
        //           confirmButtonText: "Siap!!",
        //           denyButtonText: `Maaf, belum`
        //         }).then((result) => {
        //         /* Read more about isConfirmed, isDenied below */
        //         if (result.isConfirmed) {
        //             Swal.fire("Lanjut isi Form!", "", "success").then(() => {
        //                 window.location.href = "{{ url('frontend/form') }}";
        //             });

        //         } else if (result.isDenied) {
        //             Swal.fire("Cari yang lain", "", "error").then(() =>{
        //               window.location.href = "{{ url('/') }}";
        //             });
        //         }
        // }); --}}
          {{-- });
      </script> --}}


      <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma@4/bulma.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><span class="text-danger">Tukuklik</span>Vendor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vendor
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('frontend/form') }}" >Konveksi</a></li>
                    <li><a class="dropdown-item" href="{{ url('frontend/form') }}" >Percetakan</a></li>
                    <li><a class="dropdown-item" href="{{ url('frontend/form') }}" >ATK</a></li>
                    <li><a class="dropdown-item" href="{{ url('frontend/form') }}" >Souvenir</a></li>
                  </ul>
                {{-- <a class="nav-link" href="#team">Team</a> --}}
              </li>
            </ul>
          </div>
        </div>
      </nav>




      <div class="container-fluid" style="position: relative;">
        <div class="p-5 text-center bg-image rounded-3" style="
            background-image: url('{{ asset('frontend/img/foto bersama.jpeg') }}');
            height: 648px;
            background-size: cover;
            position: relative;

        ">
            <!-- Elemen mask -->
            <div class="mask" style="
                background-color: rgba(0, 0, 0, 0.6);
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            "></div>

            <!-- Konten di dalam jumbotron -->
            <div class="d-flex justify-content-center align-items-center h-100" style="position: relative; z-index: 1;">
                <!-- Tambahkan properti position: relative; dan z-index untuk konten -->
                <div class="text-white">
                    <h1 class="mb-3">Tukuklik Vendor</h1>
                    <h4 class="mb-3">Gabung bersama kami, untuk memperbesar usaha kita bersama</h4>
                    <a class="btn btn-outline-light btn" href="{{ url('frontend/form') }}" role="button">Daftar Vendor</a>
                </div>
            </div>
        </div>
    </div>





      <section id="catalog" class="catalog mt-5 mb-5">
        <div class="title text-center">
            <h3>Spesifikasi Konveksi</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card ">
                            <img src="{{ asset('frontend/img/konveksi/test2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Kantor</h5>
                                <p class="card-text">Kaos kantor Bahan Taipan Tropical adalah jenis bahan yang terbuat serat katun (cotton) dan polyester.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                                {{-- <script src="dist/sweetalert2.all.min.js"></script>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        // Menambahkan event listener untuk tombol daftar
                                        document.getElementById('daftarButton').addEventListener('click', function () {
                                            Swal.fire({
                                                title: "Contoh Baju",
                                                html: "<div class='text-center'>Apakah anda memiliki spesifikasi yang persis dengan gambar?</div>",
                                                imageUrl: "{{ asset('frontend/img/konveksi/test2.jpg') }}", // Pastikan URL gambar ini benar
                                                imageWidth: 200,
                                                imageHeight: 280,
                                                showDenyButton: true,
                                                showCancelButton: true,
                                                confirmButtonText: "Punya dong",
                                                denyButtonText: `Loh gapunya`,
                                                allowOutsideClick: false,
                                                showCloseButton: true
                                            }).then((result) => {
                                                /* Read more about isConfirmed, isDenied below */
                                                if (result.isConfirmed) {
                                                    Swal.fire("Lanjut isi Form!", "", "success").then(() => {
                                                        window.location.href = "{{ url('frontend/form') }}";
                                                    });

                                                } else if (result.isDenied) {
                                                    Swal.fire("Cari yang lain", "", "error").then(() =>{
                                                        window.location.href = "{{ url('/') }}";
                                                    });
                                                }
                                            });
                                        });
                                    });
                                </script> --}}

                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Kantor</h5>
                                <p class="card-text">Kaos kantor Bahan Taipan Tropical adalah jenis bahan yang terbuat serat katun (cotton) dan polyester.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Kantor</h5>
                                <p class="card-text">Kaos kantor Bahan Taipan Tropical adalah jenis bahan yang terbuat serat katun (cotton) dan polyester.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/konveksi/test4.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Jersey</h5>
                                <p class="card-text">Bahan kain jersey merupakan kombinasi dari bahan katun dan sintetis.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test3.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Jersey</h5>
                                <p class="card-text">Bahan kain jersey merupakan kombinasi dari bahan katun dan sintetis.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test4.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Jersey</h5>
                                <p class="card-text">Bahan kain jersey merupakan kombinasi dari bahan katun dan sintetis.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/konveksi/test6.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos katun</h5>
                                <p class="card-text">Bahan kain cotton combed 30s dan 24s.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test5.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos katun</h5>
                                <p class="card-text">Bahan kain cotton combed 30s dan 24a.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test6.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos katun</h5>
                                <p class="card-text">Bahan kain cotton combed 30s dan 24s.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/konveksi/test8.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jaket Kantor</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat seragam kantor.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test7.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jaket Kantor</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat seragam kantor.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test8.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jaket Kantor</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat seragam kantor.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/konveksi/test9.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Baju Batik</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat baju batik.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test10.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Baju Batik</h5>
                                <p class="card-text">Kain mori merupakan bahan sering digunakan sebagai bahan untuk membuat baju batik.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/konveksi/test9.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Baju Batik</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat baju batik.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="catalog" class="catalog mt-5 ">
        <div class="title text-center">
            <h3>Spesifikasi Goodiebag</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card ">
                            <img src="{{ asset('frontend/img/goodiebag/test12.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test13.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test11.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/goodiebag/test14.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test16.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test15.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/goodiebag/test17.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test18.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test19.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Tali Bisban</h5>
                                <p class="card-text">Goodiebag Tali Bisban.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/goodiebag/test21.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Canvas</h5>
                                <p class="card-text">Goodiebag Canvas.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test20.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Canvas</h5>
                                <p class="card-text">Goodiebag Canvas.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test22.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Canvas</h5>
                                <p class="card-text">Goodiebag Canvas.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/goodiebag/test24.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Canvas</h5>
                                <p class="card-text">Goodiebag Canvas.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test23.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Canvas</h5>
                                <p class="card-text">Goodiebag Canvas.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test25.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag Canvas</h5>
                                <p class="card-text">Goodiebag Canvas.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/goodiebag/test27.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag D600</h5>
                                <p class="card-text">Goodiebag D600.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test26.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag D600</h5>
                                <p class="card-text">Goodiebag D600.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/goodiebag/test28.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Goodiebag D600</h5>
                                <p class="card-text">Goodiebag D600.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section id="catalog" class="catalog mt-5 ">
        <div class="title text-center">
            <h3>Spesifikasi Pouch</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card ">
                            <img src="{{ asset('frontend/img/pouch/test29.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Euroka PS009</h5>
                                <p class="card-text">Pouch Euroka PS009.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test30.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Euroka PS009</h5>
                                <p class="card-text">Pouch Euroka PS009.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test31.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Euroka PS009</h5>
                                <p class="card-text">Pouch Euroka PS009.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test33.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Acropolis PS007</h5>
                                <p class="card-text">Pouch Acropolis PS007.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test32.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Acropolis PS007</h5>
                                <p class="card-text">Pouch Acropolis PS007.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test34.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Acropolis PS007</h5>
                                <p class="card-text">Pouch Acropolis PS007.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test37.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Genesis PS010</h5>
                                <p class="card-text">Pouch Genesis PS010.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test35.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Genesis PS010</h5>
                                <p class="card-text">Pouch Genesis PS010.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test36.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Genesis PS010</h5>
                                <p class="card-text">Pouch Genesis PS010.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test38.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Kecil PS012</h5>
                                <p class="card-text">Pouch Kecil PS012.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test39.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Kecil PS012</h5>
                                <p class="card-text">Pouch Kecil PS012.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test40.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Kecil PS012</h5>
                                <p class="card-text">Pouch Kecil PS012.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test41.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP</h5>
                                <p class="card-text">Pouch Premium POP.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test42.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP</h5>
                                <p class="card-text">Pouch Premium POP.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test43.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP</h5>
                                <p class="card-text">Pouch Premium POP.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test44.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP001</h5>
                                <p class="card-text">Pouch Premium POP001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test44.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP001</h5>
                                <p class="card-text">Pouch Premium POP001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test44.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP001</h5>
                                <p class="card-text">Pouch Premium POP001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test45.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP006</h5>
                                <p class="card-text">Pouch Premium POP006.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test46.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP006</h5>
                                <p class="card-text">Pouch Premium POP006.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test47.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP006</h5>
                                <p class="card-text">Pouch Premium POP006.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test49.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP007</h5>
                                <p class="card-text">Pouch Premium POP007.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test48.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP007</h5>
                                <p class="card-text">Pouch Premium POP007.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test50.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP007</h5>
                                <p class="card-text">Pouch Premium POP007.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test51.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP012</h5>
                                <p class="card-text">Pouch Premium POP012.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test52.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP012</h5>
                                <p class="card-text">Pouch Premium POP012.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test51.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP012</h5>
                                <p class="card-text">Pouch Premium POP012.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test53.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Standart PS003</h5>
                                <p class="card-text">Pouch Standart PS003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test54.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Standart PS003</h5>
                                <p class="card-text">Pouch Standart PS003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test53.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Standart PS003</h5>
                                <p class="card-text">Pouch Standart PS003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test56-1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Standart PS004</h5>
                                <p class="card-text">Pouch Standart PS004.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test55.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Standart PS004</h5>
                                <p class="card-text">Pouch Standart PS004.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test56.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Standart PS004</h5>
                                <p class="card-text">Pouch Standart PS004.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test58.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP011</h5>
                                <p class="card-text">Pouch Premium POP011.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test57.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP011</h5>
                                <p class="card-text">Pouch Premium POP011.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test59.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pouch Premium POP011</h5>
                                <p class="card-text">Pouch Premium POP011.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/pouch/test61.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Puch Acme PS006</h5>
                                <p class="card-text">Puch Acme PS006.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test60.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Puch Acme PS006</h5>
                                <p class="card-text">Puch Acme PS006.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/pouch/test62.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Puch Acme PS006</h5>
                                <p class="card-text">Puch Acme PS006.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </section>


    <section id="catalog" class="catalog mt-5 ">
        <div class="title text-center">
            <h3>Spesifikasi Tas</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card ">
                            <img src="{{ asset('frontend/img/tas/test63.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Adara T001</h5>
                                <p class="card-text">Tas Adara T001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test64.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Adara T001</h5>
                                <p class="card-text">Tas Adara T001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test65.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Adara T001</h5>
                                <p class="card-text">Tas Adara T001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/tas/test66.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Alice T002</h5>
                                <p class="card-text">Tas Alice T002.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test67.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Alice T002</h5>
                                <p class="card-text">Tas Alice T002.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test68.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Alice T002</h5>
                                <p class="card-text">Tas Alice T002.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/tas/test69.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Amara T003</h5>
                                <p class="card-text">Tas Amara T003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test70.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Amara T003</h5>
                                <p class="card-text">Tas Amara T003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test71.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Amara T003</h5>
                                <p class="card-text">Tas Amara T003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/tas/test72.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Astala T004</h5>
                                <p class="card-text">Tas Astala T004.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test73.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Astala T004</h5>
                                <p class="card-text">Tas Astala T004.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test74.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Astala T004</h5>
                                <p class="card-text">Tas Astala T004.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/tas/test75.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Cassia T005</h5>
                                <p class="card-text">Tas Cassia T005.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test76.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Cassia T005</h5>
                                <p class="card-text">Tas Cassia T005.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test77.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Cassia T005</h5>
                                <p class="card-text">Tas Cassia T005.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/tas/test78.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK001</h5>
                                <p class="card-text">Tas Kepegawaian TK001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test79.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK001</h5>
                                <p class="card-text">Tas Kepegawaian TK001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test80.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK001</h5>
                                <p class="card-text">Tas Kepegawaian TK001.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/tas/test81.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK002</h5>
                                <p class="card-text">Tas Kepegawaian TK002.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test82.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK002</h5>
                                <p class="card-text">Tas Kepegawaian TK002.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test83.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK002</h5>
                                <p class="card-text">Tas Kepegawaian TK002.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/tas/test84.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK003</h5>
                                <p class="card-text">Tas Kepegawaian TK003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test85.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK003</h5>
                                <p class="card-text">Tas Kepegawaian TK003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/tas/test86.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tas Kepegawaian TK003</h5>
                                <p class="card-text">Tas Kepegawaian TK003.</p>
                                <a href="#" id="daftarButton" onclick="tampilkanAlert()" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- Contact starts -->
    <section id="contact" class="contact section-padding">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2>Contact Us</h2>
                        <p>Terima kasih telah menghubungi kami. Kami siap membantu Anda dengan segala pertanyaan atau permintaan yang Anda miliki. <br>Jangan ragu untuk menghubungi kami melalui formulir kontak di bawah ini atau melalui informasi kontak yang tercantum. </p>
                    </div>
                </div>
            </div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<form action="#" class="bg-light p-4 m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Full Name" required="" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input class="form-control" placeholder="Email" required="" type="email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea class="form-control" placeholder="Message" required="" rows="3"></textarea>
								</div>
							</div><button class="btn btn-warning btn-lg btn-block mt-3" type="button">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section>

      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center" class="">
        <div class="container">
            <p class="text-white">All Right Reserved By tukuklik.com</p>
        </div>
    </footer>
    <!-- footer ends -->

    <script src="{{ asset('frontend/js/alert.js')}}"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
