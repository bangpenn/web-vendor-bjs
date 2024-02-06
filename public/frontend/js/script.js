document.addEventListener("DOMContentLoaded", function () {
    // Get radio buttons
    const jenisVendorRadios = document.querySelectorAll('input[name="jenis_vendor"]');
    const kategoriVendorSelect = document.querySelector('#kategori-vendor select');

    // Function to populate kategori vendor options
    function populateKategoriVendorOptions(jenisVendor) {
        // Clear existing options
        kategoriVendorSelect.innerHTML = '';

        // Populate options based on jenis_vendor
        switch (jenisVendor) {
            case 'percetakkan':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>1. Vendor Percetakkan Amplop</option>
                    <option>2. Vendor Percetakkan Kalender</option>
                    <option>3. Vendor Percetakkan Paper Bag</option>
                    <option>4. Vendor Percetakkan Stiker</option>
                    <option>5. Vendor Percetakkan Packaging</option>
                    <option>6. Vendor Percetakkan Continuous Form</option>
                `;
                break;
            case 'souvenir':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>1. Vendor Souvenir Thumbler Stainless & Plastik</option>
                    <option>2. Vendor Souvenir Power Bank</option>
                    <option>3. Vendor Souvenir Speaker Bluetooth</option>
                    <option>4. Vendor Souvenir Flashdisk</option>
                    <option>5. Vendor Souvenir Jam Meja</option>
                    <option>6. Vendor Souvenir Jam Dinding</option>
                    <option>7. Vendor Souvenir Payung Promosi</option>
                    <option>8. Vendor Souvenir Alat Set Makan</option>
                    <option>9. Vendor Souvenir Handuk</option>
                    <option>10. Vendor Souvenir Agenda</option>
                    <option>11. Vendor Souvenir Bolpoint Ekslusif</option>
                    <option>12. Vendor Souvenir Tempat Tisue</option>
                    <option>13. Vendor Souvenir Diffuser</option>
                    <option>14. Vendor Souvenir Card Holder</option>
                    <option>15. Vendor Souvenir Gift set</option>
                    <option>16. Vendor Souvenir Bantal Leher</option>
                    <option>17. Vendor Souvenir Bantal Mobil</option>
                    <option>18. Vendor Souvenir ATK</option>
                    <option>19. Vendor Souvenir Gantungan Kunci Mobil/Sepeda Motor Polos Tanpa Merk</option>
                    <option>20. Vendor Souvenir Pen Holder</option>

                `;
                break;
            case 'atk':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>1. Vendor ATK</option>
                    <option>2. Vendor ATK Kertas HVS</option>
                    <option>3. Vendor ATK Printer</option>
                    <option>4. Vendor ATK Pemotong Kertas</option>
                    <option>5. Vendor ATK Pemotong AC</option>
                `;
                break;
            case 'konveksi':
                kategoriVendorSelect.innerHTML = `
                    <option selected>Pilih vendor...</option>
                    <option>1. Vendor Konveksi Kaos</option>
                    <option>2. Vendor Konveksi Jaket</option>
                    <option>3. Vendor Konveksi Kemeja Dinas</option>
                    <option>4. Vendor Konveksi Wear Pack</option>
                    <option>5. Vendor Konveksi Batik Dinas/Costum</option>
                    <option>6. Vendor Konveksi Celana</option>
                    <option>7. Vendor Konveksi Topi</option>
                    <option>8. Vendor Konveksi Slayer</option>
                    <option>9. Vendor Konveksi Tas Gody Bag</option>
                    <option>10. Vendor Konveksi Tas Pocuh</option>
                    <option>11. Vendor Konveksi Rompi</option>

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

