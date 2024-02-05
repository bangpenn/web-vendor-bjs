<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tukuklik | Form Pendaftaran Vendor</title>

    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}"><span class="text-danger">Tukuklik</span>Vendor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

        </div>
      </nav>

    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">
            Formulir Pendaftaran Vendor
        </h2>
        <form class="row g-3" action="{{ url('simpan-data') }}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Distributor</label>
                <input type="text" name="nama-distributor" class="form-control" placeholder="Masukkan Nama Lengkap">
            </div><br>
            <div class="form-group">
                <label>Nama UMKM</label>
                <input type="text" name="nama-umkm" class="form-control" placeholder="Masukkan Nama UMKM">
            </div><br>
            <div class="form-group">
                <label>Alamat Distributor/Kantor</label>
                <input type="text" name="alamat-distributor" class="form-control" placeholder="Masukkan Alamat">
            </div><br>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Kota</label>
                <input type="text" class="form-control" id="inputKota">
              </div>
              <div class="col-md-4">
                <label for="inputProvinsi" class="form-label">Provinsi</label>
                <select id="inputProvinsi" class="form-select">
                    <option selected>Pilih...</option>
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
                <input type="text" class="form-control" id="inputZip">
              </div>
            <div class="form-group">
                <label>No Handphone</label>
                <input type="text" name="no-handphone" class="form-control" placeholder="Masukkan No.Handphone">
            </div><br>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email-distributor" class="form-control" placeholder="Masukkan Email">
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

            <div class="form-group" id="kategori-vendor">
                <label>Kategori Vendor</label>
                <select class="form-control">
                </select>
            </div><br>

            <div class="form-group">
                <label>Jumlah Stock</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukkan Jumlah Stock">
            </div><br>

            <div class="form-group">
                <label>Harga Pricelist/Katalog</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga">
            </div><br>

            <div class="form-group">
                <label>Upload Gambar Produk</label>
                <input type="file" class="form-control-file" name="">
                <small>Upload file dengan ukuran maksimal 2 MB</small>
            </div><br>

            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <div class="col-12 text-end">
                 <button type="reset" class="btn btn-danger">Reset</button>
            </div>


        </form>
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>
