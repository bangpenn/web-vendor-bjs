<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('auth/assets/tukuklik.png') }}" type="image/x-icon" />

    <title>Tukuklik | Website Vendor Management Systems</title>

    <!-- All CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<!-- MDB -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/> --}}

</head>
<body>
    <div id="progress">
        <span id="progress-value">
            &#x1F815;
        </span>

    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-header">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><span class="text-danger">Tukuklik</span>Vendor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#partner">Partner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Hubungi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('frontend/catalog') }}">Catalog</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vendor
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('frontend/catalog2') }}" >Konveksi</a></li>
                    <li><a class="dropdown-item" href="{{ url('frontend/form') }}" >Percetakan</a></li>
                    <li><a class="dropdown-item" href="{{ url('frontend/form') }}" >ATK</a></li>
                    <li><a class="dropdown-item" href="{{ url('frontend/catalog3') }}" >Souvenir</a></li>
                  </ul>
                {{-- <a class="nav-link" href="#team">Team</a> --}}
              </li>

            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-danger" type="submit">
                    <i class="bi bi-person-circle me-1" style="color: white"></i>
                    <p style="color: white">{{ $user->name }}</p>
                </button>
            </form>
          </div>
        </div>
      </nav>


      <section id="banner" style="position: relative;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('frontend/img/showroom1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="judul-banner">Kolaborasi yang Menguntungkan</h5>
                    <p class="detail-banner">Di perusahaan kami, kami percaya pada kerjasama yang saling menguntungkan. Bergabunglah dengan jaringan vendor kami dan nikmati peluang kolaborasi yang luas.</p>
                    <p><a href="{{ url('frontend/form') }}" class="btn btn-danger mt-3">Daftar</a></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('frontend/img/showroom2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5 class="judul-banner">Peluang Pertumbuhan Bersama</h5>
                    <p class="detail-banner">Bergabunglah dengan perusahaan kami untuk mendapatkan peluang pertumbuhan bersama yang tak terbatas.</p>
                    <p><a href="{{ url('frontend/form') }}" class="btn btn-danger mt-3">Daftar</a></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('frontend/img/showroom3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5 class="judul-banner">Networking yang Luas dan Peluang Ekspansi</h5>
                    <p class="detail-banner">Dengan bergabung bersama kami, Anda akan mendapatkan akses ke jaringan yang luas dan peluang ekspansi yang tak terbatas.</p>
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

          <div class="custom-shape-divider-bottom-1708053876">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
            </svg>
        </div>
      </section>

      {{-- <!-- Pertnership --> --}}
     <section id="partner">
        <div class="container mb-5">
            <div class="row text-center">
                <h2 class="display-6 fw-bold" data-aos="fade" data-aos-duration="500">
                    Partnership
                </h2>
                <p class="display-6 mt-lg-2" style="font-size: 16px" data-aos="fade" data-aos-duration="500">
                    Tukuklik.com telah terdaftar dan terkualifikasi pada Layanan Pengadaan Secara Elektronik (LPSE) dan Sistem Informasi Pengadaan Barang/Jasa Pemerintah (SIKaP), serta menjadi mitra resmi
                    E-Catalogue, Toko Daring, SIMPeL Kemenkeu, dan PaDI UMKM.
                </p>
            </div>
            <div class="logo-container crop-img" data-aos="fade-left" data-aos-duration="1000">
                <img src="{{ asset('frontend/assets/LKPP.png') }}" alt="logo 1" class="img-fluid" width="200" height="150">
                <img src="{{ asset('frontend/assets/belapengadaan.png') }}" alt="logo 2" class="img-fluid" width="200" height="100">
                <img src="{{ asset('frontend/assets/padiumkm.png') }}" alt="logo 3" class="img-fluid" width="130" height="100">
                <img src="{{ asset('frontend/assets/lpse.png') }}" alt="logo 4" class="img-fluid" width="180" height="100">
                <img src="{{ asset('frontend/assets/sikap.png') }}" alt="logo 5" class="img-fluid" width="120" height="100">
                <img src="{{ asset('frontend/assets/simpel.png') }}" alt="logo 6" class="img-fluid" width="200" height="100">
                <img src="{{ asset('frontend/assets/ecatalogue.png') }}" alt="logo 7" class="img-fluid" width="220" height="120">
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <p class="display-6 mt-lg-2" style="font-size: 16px" data-aos="fade-up" data-aos-duration="500">
                    Kami telah dipercaya dan menjalin kerjasama dengan lebih dari 430 instansi, <br>Badan Usaha Milik Negara (BUMN), maupun perusahaan Swasta.
                </p>
            </div>
            <div class="logo-container crop-img" data-aos="fade-right" data-aos-duration="1000">
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


       <!-- portfolio strats -->
       <section id="portfolio" class="portfolio section-padding" style="position: relative; background-color: #EE2B47">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-1">
                        <h2 class="display-6 fw-bold text-white" data-aos="fade-up" data-aos-duration="500">Produk</h2>
                        <p class="text-white" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">Kami berkomitmen untuk memberikan dampak positif dalam setiap langkah.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-3 pb-4">
                    <div class="card text-light text-center bg-white pb-2" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine"
                    data-aos-duration="1000">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/percetakkan.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">Konveksi</h3>
                            <p class="lead">Ingin bergabung sebagai vendor Konveksi? Klik tombol di bawah untuk bergabung bersama kami!</p>
                            <a href="{{ url('frontend/form') }}"class="btn btn-danger text-white">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-2" data-aos="fade-up"
                    data-aos-duration="1000">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/gift-set.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">ATK</h3>
                            <p class="lead">Ingin bergabung sebagai vendor ATK? Klik tombol di bawah untuk bergabung bersama kami!</p>
                            <a href="{{ url('frontend/form') }}"class="btn btn-danger text-white">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-2" data-aos="fade-down"
                    data-aos-duration="1000">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/percetakkan.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">Percetakkan</h3>
                            <p class="lead">Ingin bergabung sebagai vendor Percetakan? Klik tombol di bawah untuk bergabung bersama kami!</p>
                            <a href="{{ url('frontend/form') }}"class="btn btn-danger text-white">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-3">
                    <div class="card text-light text-center bg-white pb-2" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine"
                    data-aos-duration="1000">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="{{ asset('frontend/img/gift-set.png') }}" class="img-fluid" alt="" width="500" height="300">
                          </div>
                            <h3 class="card-title">Souvenir</h3>
                            <p class="lead">Ingin bergabung sebagai vendor Souvenir? Klik tombol di bawah untuk bergabung bersama kami!</p>
                            <a href="{{ url('frontend/form') }}"class="btn btn-danger text-white">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-top-1708053017">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="custom-shape-divider-bottom-1708053522">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
      </section>
      <!-- portfolio ends -->


      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-12 md-5">
                      <div class="about-img" data-aos="fade-right" data-aos-duration="2000">
                          <img src="{{ asset('frontend/img/foto_bersama-removebg-preview.png') }}" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-12 ps-lg-5 pe-lg-5 md-5">
                      <div class="about-text">
                            <h2 class="display-6 fw-bold" data-aos="fade-left" data-aos-duration="1000">Tim Kami</h2>
                            <h5 data-aos="fade" data-aos-duration="500" data-aos-delay="200">Tim ahli luar biasa</h5>
                            <p class="about-detail" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">Ayo bergabung bersama kami sebagai mitra perusahaan! Sebagai vendor, kami berkomitmen untuk membantu Anda mengembangkan bisnis Anda ke tingkat selanjutnya. Kami mengundang Anda untuk menjalin kemitraan yang saling menguntungkan, di mana kami akan menyediakan solusi teknologi terbaik untuk mendukung pertumbuhan bisnis Anda. Dengan kerjasama yang erat, kita bisa mewujudkan potensi penuh dari usaha Anda. Mari kita jalin kemitraan yang kuat dan sukses bersama-sama.<br> yaa gak siiih, Tunggu apa lagi??</p>
                            <a href="{{ url('frontend/form') }}" class="btn btn-danger text-white" data-aos="fade" data-aos-duration="500">Daftar dong</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <!-- Video Profil Start -->
      <section id="video-profil" class="video-profil section-padding">
        <div class="container">
            <div class="row">

                <!-- Teks -->
                <div class="col-lg-6">
                    <div class="video-text pe-4 mt-2 md-5 ">
                        <h2 class="display-6 fw-bold" data-aos="fade-right" data-aos-duration="1000">Video Company Profile</h2>
                        <p class="video-detail" data-aos="fade" data-aos-duration="500" data-aos-delay="200">
                            Dengan bergabung bersama kami, Anda akan mendapatkan akses ke jaringan yang luas dan peluang ekspansi yang tak terbatas. Kami percaya pada pertumbuhan bersama dan memberikan platform bagi vendor untuk mencapai potensi penuh mereka. Mari bersama-sama mengeksplorasi peluang baru dan menghadirkan inovasi. <br> yaa gak siiih, Tunggu apa lagi??
                        </p>
                        <a href="{{ url('frontend/form') }}" class="btn btn-danger text-white"  data-aos="fade" data-aos-duration="500" data-aos-delay="300">Daftar dong</a>
                    </div>
                </div>
                <!-- Video Profil -->
                <div class="col-lg-6 text-center mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="2000">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" width="300" height="532" controls>
                            <source src="{{ asset('frontend/img/tukuklik.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>



      <!-- Video Profil End -->
      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2 class="display-6 fw-bold">Hubungi Kami</h2>
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
							</div><button class="btn btn-lg btn-block mt-3 text-white" type="button" style="background-color: #EE2B47">Kirim Sekarang</button>
						</div>
					</form>
				</div>
			</div>
		</div>
      </section>
      <!-- contact ends -->
      <!-- footer starts -->

      <section id="footer">
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-body-tertiary text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Terhubunglah dengan kami di jejaring sosial:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://www.instagram.com/tukuklik/" class="me-4 text-reset">
                <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.tiktok.com/@tukuklik.com" class="me-4 text-reset">
                <i class="bi bi-tiktok"></i>
                </a>
                <a href="https://www.facebook.com/tukuklikofficial" class="me-4 text-reset">
                <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.tukuklik.com/" class="me-4 text-reset">
                <i class="bi bi-google"></i>
                </a>
                <a href="https://www.linkedin.com/company/tukuklik/about/" class="me-4 text-reset">
                <i class="bi bi-linkedin"></i>
                </a>
            </div>
            <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img src="{{ asset('auth/assets/tukuklik.png') }}"alt="Tukuklik" width="24" height="24"/> Tukuklik
                    </h6>

                    <p>
                        Bergabunglah dan menjadi mitra kami dalam menjelajahi ekspansi tanpa batas.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    Produk Kami
                    </h6>
                    <p>
                    <a href="#!" class="text-reset">Konveksi</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Souvenir</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">ATK</a>
                    </p>
                    <p>
                    <a href="#!" class="text-reset">Percetakkan</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                    Link
                    </h6>
                    <p>
                    <a href="{{ url('/') }}" class="text-reset">Beranda</a>
                    </p>
                    <p>
                    <a href="#partner" class="text-reset">Partner</a>
                    </p>
                    <p>
                    <a href="#portofolio" class="text-reset">Produk</a>
                    </p>
                    <p>
                    <a href="#about" class="text-reset">Tentang</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Hubungi Kami</h6>
                    <p><i class="fas fa-home me-3"></i> Jl. Bangah Jaya Indah XI No.2, Kec. Gedangan Kab Sidoarjo Jawa Timur</p>
                    <p>
                    <i class="fas fa-envelope me-3"></i>
                    official@tukuklik.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 62 234 567 88</p>
                </div>
                <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4 text-white" style="background-color: #EE2B47;">
            © 2024 Copyright:
            <a class="text-reset fw-bold text-white" href="https://tukuklik.com/">Tukuklik.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>

      <!-- footer ends -->

    <!-- All Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/css/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>
</html>




<!--for getting the form download the code from download button-->
