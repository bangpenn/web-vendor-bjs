<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('auth/assets/tukuklik.png') }}" type="image/x-icon" />
    <title>BJS | Form Pendaftaran Vendor</title>

    {{-- <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><span style="color: #233E8B">BJS</span>Vendor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
      </nav>

      <div class="container">
        <div class="form-group col-12 p-0">
            <div>
                @if (Session('success'))
                <div class="alert alert-success">
                    {{ Session('success') }}
                </div>
                @endif
            </div>
        </div>
      </div>

      <section id="form-vendor">
        <div class="container">
            <h2 class="alert alert-primary text-center mt-3">
                Formulir Pendaftaran Vendor
            </h2>
            <form id="form-vendor" class="row g-3" action="{{ route('store') }}"  method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Distributor</label>
                    <input type="text" id="nama_distributor" name="nama_distributor" class="form-control @error('nama_distributor') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" required autofocus>

                    @error('nama_distributor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><br>
                <div class="form-group">
                    <label>Nama UMKM</label>
                    <input type="text" id="nama_umkm" name="nama_umkm" class="form-control" placeholder="Masukkan Nama UMKM" required>
                </div><br>
                <div class="form-group">
                    <label>Alamat Distributor/Kantor</label>
                    <input type="text" id="alamat_distributor" name="alamat_distributor" class="form-control" placeholder="Masukkan Alamat" required>
                </div><br>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">Kota</label>
                    <input type="text" id="kota" name="kota" placeholder="Masukkan Kota" class="form-control" id="inputKota" required>
                  </div>
                  <div class="col-md-4">
                    <label for="inputProvinsi" class="form-label">Provinsi</label>
                    <select id="inputProvinsi" id="provinsi" class="form-select" name="provinsi" required>
                        <option selected>Pilih provinsi...</option>
                        <option>Nanggroe Aceh Darussalam</option>
                        <option>Sumatera Utara</option>
                        <option>Sumatera Selatan</option>
                        <option>Sumatera Barat</option>
                        <option>Bengkulu</option>
                        <option>Riau</option>
                        <option>Kepulauan Riau</option>
                        <option>Jambi</option>
                        <option>Lampung</option>
                        <option>Bangka Belitung</option>
                        <option>Kalimantan Barat</option>
                        <option>Kalimantan Timur</option>
                        <option>Kalimantan Selatan</option>
                        <option>Kalimantan Tengah</option>
                        <option>Kalimantan Utara</option>
                        <option>Banten</option>
                        <option>DKI Jakarta</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Daerah Istimewa Yogyakarta</option>
                        <option>Jawa Timur</option>
                        <option>Bali</option>
                        <option>Nusa Tenggara Timur</option>
                        <option>Nusa Tenggara Barat</option>
                        <option>Gorontalo</option>
                        <option>Sulawesi Barat</option>
                        <option>Sulawesi Tengah</option>
                        <option>Sulawesi Utara</option>
                        <option>Sulawesi Tenggara</option>
                        <option>Sulawesi Selatan</option>
                        <option>Maluku Utara</option>
                        <option>Maluku</option>
                        <option>Papua Barat</option>
                        <option>Papua</option>
                        <option>Papua Tengah</option>
                        <option>Papua Pegunungan</option>
                        <option>Papua Selatan</option>
                        <option>Papua Barat Daya</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Kode Pos</label>
                    <input type="text" id="kode_pos" name="kode_pos" class="form-control" placeholder="Masukkan Kode pos" required>
                  </div>
                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="text" id="no_handphone" name="no_handphone" class="form-control" placeholder="Masukkan No.Handphone" required>
                </div><br>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" id="email_distributor" name="email_distributor" class="form-control @error('email_distributor') is-invalid @enderror" placeholder="Masukkan Email" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><br>

                <div class="form-group">
                    <label for="jenis_vendor">Jenis Vendor</label><br>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_vendor" id="vendor_percetakkan" value="percetakkan" checked>
                        <label class="form-check-label" for="vendor_percetakkan">Vendor Percetakkan</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_vendor" id="vendor_souvenir" value="souvenir">
                        <label class="form-check-label" for="vendor_souvenir">Vendor Souvenir</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_vendor" id="vendor_atk" value="atk">
                        <label class="form-check-label" for="vendor_atk">Vendor ATK</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" class="form-check-input" name="jenis_vendor" id="vendor_konveksi" value="konveksi">
                        <label class="form-check-label" for="vendor_konveksi">Vendor Konveksi</label>
                    </div>
                </div><br>

                <div class="form-group" id="kategori_vendor">
                    <label>Kategori Vendor</label>
                    <select class="form-control" name="kategori_vendor" id="kategori_vendor">
                    </select>
                </div><br>

                <div class="form-group">
                    <label>Jumlah Stock</label>
                    <input type="text" name="jumlah_stock" class="form-control" placeholder="Masukkan Jumlah Stock" required>
                </div><br>

                <div class="form-group">
                    <label>Harga Pricelist/Katalog</label>
                    <input type="text" id="harga_pricelist" name="harga_pricelist" class="form-control" placeholder="Masukkan Harga" required>
                </div><br>

                <div class="wrapper">
                    <header>
                        Kirim Gambar Hasil Produk
                    </header>
                    <div class="form">
                        <label for="image_path" class="custom-file-upload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>
                                Cari File untuk mengirim gambar
                            </p>
                            <small>Upload file dengan ukuran <br> maksimal 2 MB</small>
                        </label>
                    </div>

                    <input id="image_path" type="file"  class="form-control-file" name="image_path" hidden required>

                    <section class="image-progress-area"></section>
                    <section class="image-uploaded-area"></section>
                </div>

                <div class="wrapper">
                    <header>
                        Kirim Video Gudang
                    </header>
                    <div class="form">
                        <label for="video_path" class="custom-file-upload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>
                                Cari File untuk mengirim video
                            </p>
                            <small>Upload file video dengan ukuran <br> maksimal 20 MB</small>
                        </label>
                    </div>

                    <input id="video_path" type="file" class="form-control-file" name="video_path" accept="video/*"  hidden required>

                    <section class="video-progress-area"></section>
                    <section class="video-uploaded-area"></section>
                </div>

                <div class="wrapper">
                    <header>
                        Kirim File Katalog Produk
                    </header>
                    <div class="form">
                        <label for="file_path" class="custom-file-upload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>
                                Cari File untuk mengirim Pricelist / Katalog Produk
                            </p>
                            <small>Upload file dengan ukuran <br> maksimal 20 MB</small>
                        </label>
                    </div>

                    <input id="file_path" type="file" class="form-control-file" name="file_path" accept="file/*"  hidden required>

                    <section class="file-progress-area"></section>
                    <section class="file-uploaded-area"></section>
                </div>


                <div class="col-12 text-end mt-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger" onclick="window.location.reload()">Reset</button>
                </div>
            </div>

            </form>
            <div id="error-msg" style="color: #EE2B47;"></div>

      </section>

    <script src="{{ asset('frontend/js/script2.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/script2.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </body>
</html>
