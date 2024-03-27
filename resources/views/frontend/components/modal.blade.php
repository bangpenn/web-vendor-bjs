                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Daftar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-4">
                                <form id="form-vendor" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4 border-end">
                                            <h6 class="modal-subtitle mb-4">Info Perusahaan</h6>
                                            <!-- kategori bidan perusahaan input -->
                                            <div class="form-outline mb-4">
                                                <select id="kategori_bidang_perusahaan" class="form-select" name="kategori_bidang_perusahaan" required>
                                                    <optgroup label="Kategori Bidang Perusahaan">
                                                    <option selected disabled hidden>Kategori Bidang Perusahaan</option>
                                                    <option>Teknologi Informasi</option>
                                                    <option>Manufaktur</option>
                                                    <option>Jasa Keuangan</option>
                                                    <option>Ritel</option>
                                                    <option>Kesehatan</option>
                                                    <option>Pendidikan</option>
                                                    <option>Pariwisata</option>
                                                    <option>Transportasi</option>
                                                    <option>Agrikultur</option>
                                                </select>

                                            </div>
                                            <!-- nama perusahaan input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="nama_perusahaan" name="nama_perusahaan"  class="form-control" placeholder="Nama Perusahaan" required/>
                                            </div>
                                            <!-- jumlah karyawan input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="jumlah_karyawan" name="jumlah_karyawan" class="form-control" placeholder="Jumlah Karyawan" required/>
                                            </div>
                                            <!-- File Input -->
                                            <label for="basic-url" class="form-label">Kirim hasil jadi yang pernah dikerjakan</label>
                                            <div class="input-group mb-4">
                                                <input type="file" id="hasil_jadi" name="hasil_jadi" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                            </div>
                                            <label for="basic-url" class="form-label">kirim video Gudang Perusahaan</label>
                                            <div class="input-group mb-4">
                                                <input type="file" id="video_perusahaan" name="video_perusahaan" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                            </div>
                                            <label for="basic-url" class="form-label">Kirim katalog atau pricelist</label>
                                            <div class="input-group mb-4">
                                                <input type="file" id="file_katalog" name="file_katalog" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                            </div>
                                        </div>
                                        <div class="col-md-4 border-end">
                                            <h6 class="modal-subtitle mb-4">Info Kontak Perusahaan</h6>
                                            <!--no telp perusahaan input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="no_telp_perusahaan" name="no_telp_perusahaan" class="form-control" placeholder="No Telpon Perusahaan" required/>
                                            </div>
                                            <!-- email perusahaan input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" id="email_perusahaan" name="email_perusahaan" class="form-control" placeholder="Email Perusahaan" required/>
                                            </div>
                                            <!-- sosmed perusahaan input -->
                                            <div class="form-outline mb-4">
                                            <input type="text" id="sosmed_perusahaan" name="sosmed_perusahaan" class="form-control" placeholder="Social Media Perusahaan" required>
                                            </div>
                                            <!-- alamat perusahaan input -->
                                            <div class="form-outline mb-4">
                                                <textarea class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" rows="3" placeholder="Alamat Perusahaan" required></textarea>
                                            </div>
                                            <!-- Kota pperusahaan -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="kota" name="kota" placeholder="Kota" class="form-control" id="inputKota" required>
                                            </div>
                                            <!-- provinsi -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" class="form-control" id="inputProvinsi" required>
                                            </div>
                                            <!-- kode pos -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="kode_pos" name="kode_pos" class="form-control" placeholder="Kode pos" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="modal-subtitle mb-4">Info PIC</h6>
                                            <!-- Name PIC input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Nama" required/>
                                            </div>
                                            <!-- no telp PIC input -->
                                            <div class="form-outline mb-4">
                                                <input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="No Telpon" required/>
                                            </div>
                                            <!-- email PIC input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required/>
                                            </div>
                                            <!-- Password PIC input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit button -->
                                    <div class="modal-footer justify-content-end">
                                        <button type="submit" class="btn btn-dark btn-lg">Daftar</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
