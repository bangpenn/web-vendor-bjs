let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
        scrollProgress.style.display = "grid";
        scrollProgress.classList.add("fadeIn");
    } else {
        scrollProgress.style.display = "none";
        scrollProgress.classList.remove("fadeIn");
    }
    scrollProgress.addEventListener("click", () => {
       window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
    scrollProgress.style.background = `conic-gradient(#EE2B47 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

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

// spek & deskripsi
document.getElementById("linkSpesifikasi").addEventListener("click", function(event) {
    event.preventDefault(); // Menghentikan perilaku default tautan

    document.getElementById("spesifikasi").style.display = "block";
    document.getElementById("deskripsi").style.display = "none";
});

document.getElementById("linkDeskripsi").addEventListener("click", function(event) {
    event.preventDefault(); // Menghentikan perilaku default tautan

    document.getElementById("spesifikasi").style.display = "none";
    document.getElementById("deskripsi").style.display = "block";
});


$(document).ready(function() {
    // Menangani peristiwa klik pada tombol "Lihat Detail"
    $('.view-details').on('click', function(e) {
        e.preventDefault();

        // Ambil data produk dari atribut data
        var image = $(this).data('image');
        var name = $(this).data('name');
        var description = $(this).data('description');

        // Tampilkan detail produk di dalam modal
        $('#productModal').find('.modal-body').html(
            '<img src="' + image + '" alt="Product Image" class="img-fluid">' +
            '<h5 class="modal-title">' + name + '</h5>' +
            '<p>' + description + '</p>'
        );

        // Tampilkan modal
        $('#productModal').modal('show');
    });
});


const fileInput = document.getElementById("file_path");
const videoInput = document.getElementById("video_path");
const progressArea = document.querySelector(".progress-area");
const uploadedArea = document.querySelector(".uploaded-area");

file_path.addEventListener("click", () => {
    fileInput.click();
});

video_path.addEventListener("click", () => {
    videoInput.click();
});

if (fileInput) {
    fileInput.addEventListener("change", ({ target }) => {
        let file = target.files[0];
        if (file) {
            let fileName = file.name;
            if (fileName.length >= 12) {
                let splitName = fileName.split('.');
                fileName = splitName[0].substring(0, 12) + "... ." + splitName[1];
            }
            uploadFile(fileName, file, 'image');
        }
    });
}

if (videoInput) {
    videoInput.addEventListener("change", ({ target }) => {
        let file = target.files[0];
        if (file) {
            let fileName = file.name;
            if (fileName.length >= 12) {
                let splitName = fileName.split('.');
                fileName = splitName[0].substring(0, 12) + "... ." + splitName[1];
            }
            uploadFile(fileName, file, 'video');
        }
    });
}

function uploadFile(name, file, type) {
    let xhr = new XMLHttpRequest();
    let url = type === 'image' ? '/upload/image' : '/upload/video';
    xhr.open("POST", url);
    xhr.upload.addEventListener("progress", ({ loaded, total }) => {
        let fileLoaded = Math.floor((loaded / total) * 100);
        let fileTotal = Math.floor(total / 1000);
        let fileSize;
        (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024 * 1024)).toFixed(2) + " MB";
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
        progressArea.innerHTML = progressHTML;
    });

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                let uploadedHTML = `<li class="row">
                                    <div class="content">
                                        <i class="fas fa-file-alt"></i>
                                        <div class="content">
                                            <div class="details">
                                                <span class="name">${response.fileName} . Uploaded</span>
                                                <span class="size">${response.fileSize}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <i class="fas fa-check"></i>
                                </li>`;
                uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
            } else {
                console.error('Error uploading file:', xhr.statusText);
            }
        }
    };

    let formData = new FormData();
    formData.append('file', file);
    xhr.send(formData);
}

function resetAndScroll() {
    // Mengakses formulir berdasarkan ID atau kelas
    var form = document.getElementById('form-vendor'); // Ganti 'myForm' dengan ID formulir Anda

    // Mengatur ulang nilai-nilai input dalam formulir
    form.reset();

    // Mengatur scroll halaman kembali ke atas
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
