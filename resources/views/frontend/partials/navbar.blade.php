<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-header">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="text-danger">BJS</span>Vendor</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#partner">Partner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#portfolio">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}#contact">Hubungi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vendor
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 1) }}" >Konveksi</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 2) }}" >Percetakan</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 3) }}" >ATK</a></li>
                        <li><a class="dropdown-item" href="{{ route('catalog.category', 4) }}" >Souvenir</a></li>
                    </ul>
                    {{-- <a class="nav-link" href="#team">Team</a> --}}
                </li>
            </ul>
        </div>
    </div>
</nav>
