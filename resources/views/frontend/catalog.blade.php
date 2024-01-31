<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-Card Carousel</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-danger">Tukuklik</span>Vendor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#partner">Partner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

        <!-- Jumbotron -->
        <div class="p-5 text-center bg-image rounded-3" style="
            background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
            height: 450px;
            ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Tukuklik Vendor</h1>
                        <h4 class="mb-3">Gabung bersama kami, untuk memperbesar usaha kita</h4>
                        <a class="btn btn-outline-light btn" href="#!" role="button">Daftar Vendor</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->



      <section id="catalog" class="catalog mt-5 mb-5">
        <div class="title text-center">
            <h3>Spesifikasi Konveksi</h3>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        <div class="card ">
                            <img src="{{ asset('frontend/img/test2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Kantor</h5>
                                <p class="card-text">Kaos kantor Bahan Taipan Tropical adalah jenis bahan yang terbuat serat katun (cotton) dan polyester.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test1.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Kantor</h5>
                                <p class="card-text">Kaos kantor Bahan Taipan Tropical adalah jenis bahan yang terbuat serat katun (cotton) dan polyester.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Kantor</h5>
                                <p class="card-text">Kaos kantor Bahan Taipan Tropical adalah jenis bahan yang terbuat serat katun (cotton) dan polyester.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/test4.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Jersey</h5>
                                <p class="card-text">Bahan kain jersey merupakan kombinasi dari bahan katun dan sintetis.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test3.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Jersey</h5>
                                <p class="card-text">Bahan kain jersey merupakan kombinasi dari bahan katun dan sintetis.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test4.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos Jersey</h5>
                                <p class="card-text">Bahan kain jersey merupakan kombinasi dari bahan katun dan sintetis.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/test6.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos katun</h5>
                                <p class="card-text">Bahan kain cotton combed 30s dan 24s.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test5.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos katun</h5>
                                <p class="card-text">Bahan kain cotton combed 30s dan 24a.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test6.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaos katun</h5>
                                <p class="card-text">Bahan kain cotton combed 30s dan 24s.</p>
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="cards-wrapper">
                        <div class="card">
                            <img src="{{ asset('frontend/img/test8.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jaket Kantor</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat seragam kantor.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test7.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jaket Kantor</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat seragam kantor.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card d-none d-md-block">
                            <img src="{{ asset('frontend/img/test8.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jaket Kantor</h5>
                                <p class="card-text">Kain katun cukup sering digunakan sebagai bahan untuk membuat seragam kantor.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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

      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center" class="">
        <div class="container">
            <p class="text-white">All Right Reserved By tukuklik.com</p>
        </div>
    </footer>
    <!-- footer ends -->


        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
