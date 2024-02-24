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



const fileInput = document.getElementById("file_path");
const videoInput = document.getElementById("video_path");
const progressArea = document.querySelector(".progress-area");
const uploadedArea = document.querySelector(".uploaded-area");

file_path.addEventListener("click", ()=>{
    fileInput.click();


});

video_path.addEventListener("click", ()=>{
    fileInput.click();
})

if (fileInput) {
    fileInput.addEventListener("change", ({target}) => {
        let file = target.files[0];
        if(file){
            let fileName = file.name;
            if(fileName.length >= 12){
                let splitName = fileName.split('.');
                fileName = splitName[0].substring(0, 12) + "... ." + splitName[1];
            }
            uploadFile(fileName, file);
        }
    });
}

if (videoInput) {
    videoInput.addEventListener("change", ({target}) => {
        let file = target.files[0];
        if(file){
            let fileName = file.name;
            if(fileName.length >= 12){
                let splitName = fileName.split('.');
                fileName = splitName[0].substring(0, 12) + "... ." + splitName[1];
            }
            uploadFile(fileName, file);
        }
    });
}

function uploadFile(name, file){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/form");
    xhr.upload.addEventListener("progress_loading", ({loaded, total}) => {
        let fileLoaded = Math.floor((loaded/total) * 100);
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
                                        <div class="progress_loading" style="width: ${fileLoaded}%"></div>
                                    </div>
                                </div>
                            </li>`;
        uploadedArea.classList.add("onprogress");
        progressArea.innerHTML = progressHTML;
        if(loaded == total){
            progressArea.innerHTML = "";
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
            uploadedArea.classList.remove("onprogress");
            uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
        }
    });
    let formData = new FormData();
    formData.append('file', file);
    xhr.send(formData);
}
