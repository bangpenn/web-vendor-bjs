<div>
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Tukuklik | Website Vendor Management Systems</title>>
  <!-- MDB icon -->
   <link rel="icon" href="{{ asset('auth/assets/tukuklik.png') }}" type="image/x-icon" /><link rel="icon" href="{{ asset('auth/assets/tukuklik.png') }}" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('auth/css/bootstrap-login-form.min.css') }}" />
</head>

<body>
  <!-- Start your project here-->

  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #fccb90;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, #8a0000, #f53f42, #e25252, #e61616);

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, #8a0000, #f53f42, #e25252, #e61616);
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 110vh !important;
      }
    }
    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }
  </style>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-4 h-150">
      <div class="row d-flex justify-content-center align-items-center h-150">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-4 mx-md-4">

                  <div class="text-center">
                    <img src="{{ asset('auth/assets/tukuklik.png') }}" style="width: 80px;" alt="logo">
                    <h4 class="mt-1 pb-1">Register</h4>
                  </div>

                  <form>
                    <p>Masukkan biodata</p>

                    <div class="form-outline mb-4">
                      <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama" wire:model.defer="name"/>
                      <label class="form-label" for="name">Nama Lengkap</label>
                      @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Phone number or email address" wire:model.defer="email"/>
                        <label class="form-label" for="email">Email</label>
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="*********" wire:model.defer="password" />
                        <label class="form-label" for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <input type="password" id="password_confirmation" class="form-control" placeholder="*********" wire:model.defer="password_confirmation"/>
                        <label class="form-label" for="password_confirmation">Ulangi Password</label>

                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                        <a class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" href="{{ url('/login') }}">Daftar</a>
                      <div class="d-flex align-items-center">
                        <p class="text-muted mb-0 me-2">Sudah punya akun?</p>
                        <a class="text-muted" href="{{ url('/login') }}" style="text-decoration: none;">Masuk</a>

                        <style>
                            a.text-muted:hover {
                                font-weight: bold; Tambahkan tebal pada teks
                            }

                        </style>
                    </div>

                    </div>


                  </form>

                </div>

              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">We are more than just a company</h4>
                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{ asset('auth/js/mdb.min.js') }}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>
</div>
