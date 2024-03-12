document.addEventListener("DOMContentLoaded", function () {
    // Get radio buttons
    const jenisVendorRadios = document.querySelectorAll('input[name="jenis_vendor"]');
    const kategoriVendorSelect = document.querySelector('#kategori_vendor select');

    // Function to populate kategori vendor options
    function populateKategoriVendorOptions(jenisVendor) {
        // Clear existing options
        kategoriVendorSelect.innerHTML = '';

        // Populate options based on jenis_vendor
        switch (jenisVendor) {
            case 'percetakkan':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>Vendor Percetakkan Amplop</option>
                    <option>Vendor Percetakkan Kalender</option>
                    <option>Vendor Percetakkan Paper Bag</option>
                    <option>Vendor Percetakkan Stiker</option>
                    <option>Vendor Percetakkan Packaging</option>
                    <option>Vendor Percetakkan Continuous Form</option>
                `;
                break;
            case 'souvenir':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>Vendor Souvenir Thumbler Stainless & Plastik</option>
                    <option>Vendor Souvenir Power Bank</option>
                    <option>Vendor Souvenir Speaker Bluetooth</option>
                    <option>Vendor Souvenir Flashdisk</option>
                    <option>Vendor Souvenir Jam Meja</option>
                    <option>Vendor Souvenir Jam Dinding</option>
                    <option>Vendor Souvenir Payung Promosi</option>
                    <option>Vendor Souvenir Alat Set Makan</option>
                    <option>Vendor Souvenir Handuk</option>
                    <option>Vendor Souvenir Agenda</option>
                    <option>Vendor Souvenir Bolpoint Ekslusif</option>
                    <option>Vendor Souvenir Tempat Tisue</option>
                    <option>Vendor Souvenir Diffuser</option>
                    <option>Vendor Souvenir Card Holder</option>
                    <option>Vendor Souvenir Gift set</option>
                    <option>Vendor Souvenir Bantal Leher</option>
                    <option>Vendor Souvenir Bantal Mobil</option>
                    <option>Vendor Souvenir ATK</option>
                    <option>Vendor Souvenir Gantungan Kunci Mobil/Sepeda Motor Polos Tanpa Merk</option>
                    <option>Vendor Souvenir Pen Holder</option>

                `;
                break;
            case 'atk':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>Vendor ATK</option>
                    <option>Vendor ATK Kertas HVS</option>
                    <option>Vendor ATK Printer</option>
                    <option>Vendor ATK Pemotong Kertas</option>
                    <option>Vendor ATK Pemotong AC</option>
                `;
                break;
            case 'konveksi':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>Vendor Konveksi Kaos</option>
                    <option>Vendor Konveksi Jaket</option>
                    <option>Vendor Konveksi Kemeja Dinas</option>
                    <option>Vendor Konveksi Wear Pack</option>
                    <option>Vendor Konveksi Batik Dinas/Costum</option>
                    <option>Vendor Konveksi Celana</option>
                    <option>Vendor Konveksi Topi</option>
                    <option>Vendor Konveksi Slayer</option>
                    <option>Vendor Konveksi Tas Gody Bag</option>
                    <option>Vendor Konveksi Tas Pouch</option>
                    <option>Vendor Konveksi Rompi</option>

                `;
                break;
            default:
                break;
        }
    }

    // Event listener for radio button change
    jenisVendorRadios.forEach(function (radio) {
        radio.addEventListener('change', function () {
            const selectedJenisVendor = this.value;
            populateKategoriVendorOptions(selectedJenisVendor);
        });
    });

    // Populate kategori options on page load
    populateKategoriVendorOptions(jenisVendorRadios[0].value);
});

const imageInput = document.getElementById("image_path");
const videoInput = document.getElementById("video_path");
const fileInput = document.getElementById("file_path");

const imageProgressArea = document.querySelector(".image-progress-area");
const imageUploadedArea = document.querySelector(".image-uploaded-area");
const videoProgressArea = document.querySelector(".video-progress-area");
const videoUploadedArea = document.querySelector(".video-uploaded-area");
const fileProgressArea = document.querySelector(".file-progress-area");
const fileUploadedArea = document.querySelector(".file-uploaded-area");


imageInput.addEventListener("change", () => {

    checkSize("image_path");
});

videoInput.addEventListener("change", () => {

    checkSize("video_path");
});

fileInput.addEventListener("change", () => {

    checkSize("file_path");
});

function checkSize(inputId) {
    var inputElement = document.getElementById(inputId);
    var fileLimit = 25000; // Limit ukuran file (dalam kilobita) yang diizinkan
    var files = inputElement.files; // Ini merupakan array
    var fileSize = files[0].size; // Ukuran file dalam byte
    var fileSizeInKB = fileSize / 1024; // Konversi ukuran file dari byte ke kilobyte

    if (fileSizeInKB > fileLimit) {
        // Menggunakan SweetAlert untuk menampilkan pemberitahuan jika ukuran file terlalu besar
        Swal.fire({
            title: 'Warning!',
            text: 'Ukuran file terlalu besar. Maksimal 20 MB yang diizinkan.',
            icon: 'warning',
            confirmButtonText: 'OK'
          });

        // Mengosongkan input file
        inputElement.value = "";
    } else {
        // Jika ukuran file sesuai batas, maka lanjutkan proses upload
        let file = files[0];
        if (file) {
            let fileName = file.name;
            if (fileName.length >= 12) {
                let splitName = fileName.split('.');
                fileName = splitName[0].substring(0, 12) + "... ." + splitName[1];
            }
            uploadFile(fileName, file, inputId === "image_path" ? 'image' : (inputId === "video_path" ? 'video' : 'file'));
        }
    }
}

function uploadFile(name, file, type) {
    let xhr = new XMLHttpRequest();
    // let url = type === 'image' ? '/frontend/form/store/img' : (type === 'video' ? '/frontend/form/store/video' : '/frontend/form/store/file');
    let url = '';

    if (type === 'image') {
        url = '/frontend/form/store/img';
    } else if (type === 'video') {
        url = '/frontend/form/store/video';
    } else {
        url = '/frontend/form/store/file';
    }

    xhr.open("POST", url);
    xhr.upload.addEventListener("progress", ({ loaded, total }) => {
        let fileLoaded = Math.floor((loaded / total) * 100);
        let fileTotal = Math.floor(total / 1000);
        let fileSize = (fileTotal < 1024) ? fileTotal + " KB" : (loaded / (1024 * 1024)).toFixed(2) + " MB";

        let progressHTML = `<li class="row">
                                <i class="fas fa-file-alt"></i>
                                <div class="content">
                                    <div class="details">
                                        <span class="name">${name} . Uploading</span>
                                        <span class="percent">${fileLoaded}%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: ${fileLoaded}%"></div>
                                    </div>
                                </div>
                            </li>`;

        if (type === 'image') {
            imageUploadedArea.classList.add("onprogress");
            imageProgressArea.innerHTML = progressHTML;
        } else if (type === 'video') {
            videoUploadedArea.classList.add("onprogress");
            videoProgressArea.innerHTML = progressHTML;
        } else {
            fileUploadedArea.classList.add("onprogress");
            fileProgressArea.innerHTML = progressHTML;
        }

        if (loaded === total) {
            if (type === 'image') {
                imageProgressArea.innerHTML = "";
                let uploadedHTML = `<li class="row">
                                        <div class="content">
                                            <i class="fas fa-file-alt"></i>
                                            <div class="content">
                                                <div class="details">
                                                    <span class="name">${name} . Uploaded</span>
                                                    <span class="size">${fileSize}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <i class="fas fa-check"></i>
                                    </li>`;
                imageUploadedArea.classList.remove("onprogress");
                imageUploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
            } else if (type === 'video') {
                videoProgressArea.innerHTML = "";
                let uploadedHTML = `<li class="row">
                                        <div class="content">
                                            <i class="fas fa-file-alt"></i>
                                            <div class="content">
                                                <div class="details">
                                                    <span class="name">${name} . Uploaded</span>
                                                    <span class="size">${fileSize}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <i class="fas fa-check"></i>
                                    </li>`;
                videoUploadedArea.classList.remove("onprogress");
                videoUploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
            } else {
                fileProgressArea.innerHTML = "";
                let uploadedHTML = `<li class="row">
                                        <div class="content">
                                            <i class="fas fa-file-alt"></i>
                                            <div class="content">
                                                <div class="details">
                                                    <span class="name">${name} . Uploaded</span>
                                                    <span class="size">${fileSize}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <i class="fas fa-check"></i>
                                    </li>`;
                fileUploadedArea.classList.remove("onprogress");
                fileUploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
            }
        }
    });

    let formData = new FormData();
    formData.append('file', file);
    xhr.send(formData);
}
