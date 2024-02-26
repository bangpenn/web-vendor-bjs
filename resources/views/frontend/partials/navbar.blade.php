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
        {{--
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet"/>
        --}}
    </head>
    <body>
        <div id="progress">
            <span id="progress-value">
            &#x1F815;
            </span>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                </div>
            </div>
        </nav>
