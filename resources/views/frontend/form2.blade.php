<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ asset('auth/assets/tukuklik.png') }}" type="image/x-icon" />
  <title>Tukuklik | Form Pendaftaran Vendor</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />


</head>
<body>
    <section id="form2">
        <div class="container">
            <button type="button" id="btn" style="display: none;">Login</button>
            <script src="dist/sweetalert2.all.min.js"></script>
            <!-- Letakkan script ini di bawah elemen HTML yang diinginkan atau gunakan event DOMContentLoaded -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        title: "Spesifikasi!!!",
                        text: "Pastikan spesifikasi sesuai dengan yang dibutuhkan.",
                        icon: "warning",
                        showDenyButton: true,
                        showCancelButton: true,
                        showCloseButton: true,
                        confirmButtonText: "Siap!!",
                        denyButtonText: `Maaf, belum`
                    }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire("Lanjut isi Form!", "", "success")
                            // .then(() => {
                            //     window.location.href = "index.html"; // Ubah sesuai dengan URL yang benar
                            // });

                        } else if (result.isDenied) {
                            Swal.fire("Cari yang lain", "", "error")
                            .then(() => {
                                window.location.href = "catDetail2";
                            });
                        } else {
                            Swal.fire("kembali", "", "warning")
                            .then(() => {
                                window.location.href = "catDetail2";
                            });
                        }
                    });
                });

            </script>


            <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bulma@4/bulma.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <img src="{{ asset('frontend/img/konveksi/test2.jpg') }}" class="card-img-top" alt="Gambar Anda">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="row g-3 mt-3">
                      <h3 class="alert alert-primary text-center mt-3">
                        Formulir Pendaftaran Vendor Konveksi
                    </h3>
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
                            {{-- <div class="form-check-inline">
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
                            </div> --}}
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" name="jenis_vendor" id="vendor_konveksi" value="konveksi">
                                <label class="form-check-label" for="vendor_konveksi">Vendor Konveksi</label>
                            </div>
                        </div><br>

                        <div class="form-group" id="kategori-vendor">
                            <label>Kategori Vendor</label>
                            <input type="email" name="email-distributor" class="form-control" placeholder="">
                            {{-- <select class="form-control"> --}}
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
            </div>
        </div>

    </section>


        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
