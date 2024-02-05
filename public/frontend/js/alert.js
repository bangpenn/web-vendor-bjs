// File: public/js/alert.js
function tampilkanAlert() {
    Swal.fire({
        title: "Contoh Baju",
        html: "<div class='text-center'>Apakah anda memiliki spesifikasi yang persis dengan gambar?</div>",
        imageUrl: "/frontend/img/konveksi/test2.jpg", // Pastikan URL gambar ini benar
        imageWidth: 200,
        imageHeight: 280,
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Punya dong",
        denyButtonText: `Loh gapunya`,
        allowOutsideClick: false,
        showCloseButton: true
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire("Lanjut isi Form!", "", "success").then(() => {
                window.location.href = "form";
            });
        } else if (result.isDenied) {
            Swal.fire("Cari yang lain", "", "error").then(() =>{
                window.location.href = "/";
            });
        }
    });
}
