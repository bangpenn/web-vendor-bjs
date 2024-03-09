<div>
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Tukuklik | Website Vendor Management Systems</title>
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('auth/assets/tukuklik.png') }}" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('auth/css/bootstrap-login-form.min.css') }}" />

  <link rel="stylesheet" href="{{ asset('auth/css/style.css') }}">
</head>


<body>
  <!-- Start your project here-->

  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="{{ asset('auth/assets/tukuklik.png') }}" style="width: 80px;" alt="logo">
                    <h4 class="mt-1 mb-2 pb-1">We are Champions</h4>
                  </div>

                  <form wire:submit.prevent="loginUser">
                    <p>Silahkan Login dengan akun anda</p>

                    @if(Session::has("success"))
                        <p class="alert alert-sucess my-2">
                            {{ Session::get("success") }}
                        </p>
                    @endif

                    @if($error)
                        <p class="alert alert-danger my-2">
                            {{ $error }}
                        </p>
                    @endif

                    <div class="form-outline mb-4 ">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Phone number or email address" wire:model.defer="email"/>
                        <label class="form-label" for="email">Email</label>
                      @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="form-outline mb-4 mt-2">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="*********" wire:model.defer="password" />
                        <label class="form-label" for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" wire:model.defer="remember">
                            <label class="form-check-label" for="remember">
                                Ingat saya
                            </label>
                        </div>
                    </div>


                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Masuk</button>
                      <a class="text-muted" href={{ route('password.request') }}>Lupa password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Tidak punya akun?</p>
                    <a href="{{ url('register') }}" class="btn btn-outline-danger">Buat Akun</a>



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
