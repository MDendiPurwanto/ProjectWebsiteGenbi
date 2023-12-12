// main.js

// Fungsi untuk menangani perubahan logo pada header saat di-scroll
function handleScrollLogoChange() {
    const ud_header = document.querySelector(".ud-header");
    const sticky = ud_header.offsetTop;
    const logo = document.querySelector(".logo img");
    const baseURL = window.location.origin; // Menggunakan origin sebagai baseURL

    window.onscroll = function () {
        if (window.pageYOffset > sticky) {
            ud_header.classList.add("sticky");
            logo.src = baseURL + "/assets/images/GenBI-original.png"; // Ubah logo saat menjadi sticky
        } else {
            ud_header.classList.remove("sticky");
            logo.src = baseURL + "/assets/images/GenBI-white.png"; // Ubah logo saat tidak sticky
        }
    };
}

// Panggil fungsi untuk menangani perubahan logo saat di-scroll
handleScrollLogoChange();
