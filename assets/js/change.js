window.onscroll = function () {
    const ud_header = document.querySelector(".ud-header");
    const sticky = ud_header.offsetTop;
    const logo = document.querySelector(".logo img");

    if (window.pageYOffset > sticky) {
      ud_header.classList.add("sticky");
    } else {
      ud_header.classList.remove("sticky");
    }

    // === logo change
    if (window.pageYOffset > sticky) {
      ud_header.classList.add("sticky");
      logo.src = baseURL + "assets/images/GenBI original.png"; // Ubah logo saat menjadi sticky
  } else {
      ud_header.classList.remove("sticky");
      logo.src = baseURL + "assets/images/GenBI white (1).png"; // Ubah logo saat tidak sticky
  }
}