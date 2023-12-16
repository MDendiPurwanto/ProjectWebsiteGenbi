<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GenBI Cirebon</title>


  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="<?php echo base_url ('assets/images/logo.png'); ?>">


  <!-- ===== All CSS files ===== -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/lineicons.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/ud-styles.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/ud-styles.css.map'); ?>" />
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
                <li class="nav-item active">
                  <a class="ud-menu-scroll" href="<?php echo base_url(''); ?>">Beranda</a>
                </li>
                <li class="nav-item nav-item-has-children">
                  <a href="javascript:void(0)"> Tentang </a>
                  <ul class="ud-submenu">
                    <li class="ud-submenu-item">
                      <a href="<?php echo base_url ('Home/about');?>" class="ud-submenu-link">
                        Tentang GenBI
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="<?php echo base_url ('Home/pengurus');?>" class="ud-submenu-link">
                        Pengurus GenBI Cirebon
                      </a>
                    </li>
                  </ul>
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
                  <a href="<?php echo base_url('Home/blog'); ?>">Berita</a>
                </li>
                  <li class="nav-item">
                  <a href="<?php echo base_url('Home/contact'); ?> ">Kontak</a>
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

  </script>
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/change.js'); ?>"></script>
  <script>
    AOS.init();
  </script>
  <script>const submenuButton = document.querySelectorAll(".nav-item-has-children");
  submenuButton.forEach((elem) => {
    elem.querySelector("a").addEventListener("click", () => {
      elem.querySelector(".ud-submenu").classList.toggle("show");
    });
  });

</script>

<script>
  // Ambil URL halaman saat ini
  const currentPage = window.location.href;

  // Temukan semua link dalam navigasi
  const navLinks = document.querySelectorAll('.navbar-nav a');

  // Loop melalui setiap link dan periksa URL
  navLinks.forEach(link => {
    // Jika URL link sama dengan URL halaman saat ini, tambahkan kelas 'active'
    if (link.href === currentPage) {
      link.classList.add('active');

      // Jika link berada dalam elemen 'li', tambahkan 'active' ke elemen 'li' juga
      if (link.parentElement.tagName === 'LI') {
        link.parentElement.classList.add('active');
      }
    }
  });
</script>

<script>
  let navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  document.querySelectorAll(".ud-menu-scroll").forEach((e) =>
    e.addEventListener("click", () => {
      navbarToggler.classList.remove("active");
      navbarCollapse.classList.remove("show");
    })
  );
  navbarToggler.addEventListener("click", function () {
    navbarToggler.classList.toggle("active");
    navbarCollapse.classList.toggle("show");
  });
</script>
</body>

</html>