<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GenBI Cirebon</title>


    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/logo.png">
    

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/lineicons.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/ud-styles.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css'); ?>" />
<script>
        var baseURL = "<?php echo base_url(); ?>";
    </script>
  </head>
  <body>
    <!-- ====== Header Start ====== -->
    <header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="logo" href="index.html">
                <img src="<?php echo base_url('assets/images/GenBI white (1).png'); ?>" alt="Logo" />
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="<?php echo base_url('Home/beranda'); ?>">Beranda</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-submenu-link" href="<?php echo base_url('Home/program'); ?>">Kegiatan</a>
                  </li>
                  <li class="nav-item nav-item-has-children">
                    <a href="javascript:void(0)"> Beasiswa BI </a>
                    <ul class="ud-submenu">
                      <li class="ud-submenu-item">
                        <a href="<?php echo base_url('Home/tentangbi'); ?>" class="ud-submenu-link">
                        Tentang BI
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="<?php echo base_url('Home/persyaratan'); ?>" class="ud-submenu-link">
                        Persyaratan Beasiswa
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="<?php echo base_url('Home/beasiswa'); ?>" class="ud-submenu-link">
                          Beasiswa
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url('Home/blog'); ?>">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="galeri.html">Gallery</a>
                  </li>
                  <li class="nav-item nav-item-has-children">
                    <a href="javascript:void(0)"> Tentang </a>
                    <ul class="ud-submenu">
                    <li class="ud-submenu-item">
                    <a href="<?php echo base_url('Home/about'); ?>" class="ud-submenu-link">
                            Tentang GenBI
                        </a>
                    </li>
                      <li class="ud-submenu-item">
                        <a href="<?php echo base_url('Home/pengurus'); ?>" class="ud-submenu-link">
                          Pengurus GenBI Cirebon
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              
              <div class="navbar-btn d-none d-sm-inline-block">
                <a class="ud-main-btn ud-white-btn" href="javascript:void(0)">
                  Masuk
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
<script>
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

</script>
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js"></script>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js'); ?>"></script>
  </body>
</html>
