<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tukuklik | Website Vendor Management Systems</title>

    <!-- All CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
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


      <section id="banner">
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
                    <h5>Kolaborasi yang Menguntungkan</h5>
                    <p>Di perusahaan kami, kami percaya pada kerjasama yang saling menguntungkan. Bergabunglah dengan jaringan vendor kami dan nikmati peluang kolaborasi yang luas.</p>
                    <p><a href="{{ url('frontend/form') }}" class="btn btn-danger mt-3">Daftar</a></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('frontend/img/showroom2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>Peluang Pertumbuhan Bersama</h5>
                    <p>Bergabunglah dengan perusahaan kami untuk mendapatkan peluang pertumbuhan bersama yang tak terbatas.</p>
                    <p><a href="{{ url('frontend/form') }}" class="btn btn-danger mt-3">Daftar</a></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('frontend/img/showroom3.jpg') }}" class="d-block w-100" alt="...">
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
      </section>


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

        {{-- <!-- Pertnership --> --}}
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

      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-12 col-12 mt-md-5">
                      <div class="about-img">
                          <img src="{{ asset('frontend/img/foto_bersama-removebg-preview.png') }}" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-12 ps-lg-5 pe-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>Our Team</h2>
                            <h5>Tim ahli luar biasa</h5>
                            <p>Ayo bergabung bersama kami sebagai mitra perusahaan! Sebagai vendor, kami berkomitmen untuk membantu Anda mengembangkan bisnis Anda ke tingkat selanjutnya. Kami mengundang Anda untuk menjalin kemitraan yang saling menguntungkan, di mana kami akan menyediakan solusi teknologi terbaik untuk mendukung pertumbuhan bisnis Anda. Dengan kerjasama yang erat, kita bisa mewujudkan potensi penuh dari usaha Anda. Mari kita jalin kemitraan yang kuat dan sukses bersama-sama.<br> Tunggu apa lagi??</p>
                            <a href="{{ url('frontend/form') }}" class="btn btn-info text-white">Pelajari lebih lanjut</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      {{-- <!-- team starts -->
      <section class="team section-padding" id="team">
          <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0" style="text-align: right;">
                    <div class="section-header text-center pb-5">
                        <h2>Our Team</h2>
                        <h6>Kami membantu Anda untuk bekerja sama, <br>untuk memperbesar usaha kita bersama</h6>
                        <small>bersama-sama kita bisa mencapai kesuksesan yang lebih besar</small> <br>
                        <a href="{{ url('frontend/form') }}" class="btn text-white btn-sm btn-info">Lihat Selengkapnya</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="video-text ps-4">
                        <img src="{{ asset('frontend/img/foto_bersama-removebg-preview.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div> --}}



                    {{-- <div class="section-header text-center pb-5">
                        <h2>Our Team</h2>
                        <p>Tim Ahli <br>Hasil Luar Biasa</p>
                        <div class="col-12 col-md-6 col-lg-3 mx-auto">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{ asset('frontend/img/foto bersama.jpeg') }}" alt="" class="img-fluid rounded-circle">
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
            </div> --}}
          {{-- </div>
      </section> --}}

      <!-- team ends -->

      <!-- Video Profil Start -->
      <section id="video-profil" class="video-profil section-padding">
        <div class="container">
            <div class="row">

                <!-- Teks -->
                <div class="col-lg-6">
                    <div class="video-text pe-4 mt-md-5 ">
                        <h2>Watch Our Video</h2>
                        <p>
                            Dengan bergabung bersama kami, Anda akan mendapatkan akses ke jaringan yang luas dan peluang ekspansi yang tak terbatas. Kami percaya pada pertumbuhan bersama dan memberikan platform bagi vendor untuk mencapai potensi penuh mereka. Mari bersama-sama mengeksplorasi peluang baru dan menghadirkan inovasi. <br> Tunggu apa lagi??
                        </p>
                        <a href="{{ url('frontend/form') }}" class="btn btn-info text-white">Pelajari lebih lanjut</a>
                    </div>
                </div>
                <!-- Video Profil -->
                <div class="col-lg-6 text-center mb-4 mb-lg-0 mt-2">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"  width="300" height="532" src="{{ asset('frontend/img/tukuklik.mp4') }}" allowfullscreen></iframe>
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
      <!-- contact ends -->
      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center">
          <div class="container">
              <p class="text-white">All Right Reserved By tukuklik.com</p>
          </div>
      </footer>
      <!-- footer ends -->

    <!-- All Js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>




<!--for getting the form download the code from download button-->
