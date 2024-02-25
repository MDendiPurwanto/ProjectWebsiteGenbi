<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GenBI Cirebon</title>

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/logo.png'); ?>">


  <!-- ===== All CSS files ===== -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/lineicons.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/ud-styles.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css'); ?>" />
</head>

<body>
  <!-- ====== Header Start ====== -->

  <!-- ====== Header End ====== -->

  <!-- ====== Banner Start ====== -->
  <section class="ud-page-banner-genbi">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-banner-genbi-content">
            <h1>Beasiswa Bank Indonesia</h1>
            <ol class="banner-link">
              <li class="banner-link-nav">
                <a class="nav-satu" href="<?php echo base_url(''); ?>">Home</a>
              </li>

              <li class="banner-link-nav">
                <a class="active" href="<?php echo base_url ('Home/beasiswa');?>">beasiswa</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== Banner End ====== -->

  <section class="bi-beasiswa" id="beasiswa">
    <div class="container">
      <div class="row">
        <div class="ud-section-title mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
          <span class="tag">Beasiswa</span>
          <h2>Informasi Beasiswa</h2>
        </div>
        <div class="grid ">
          <div class=" card-beasiswa"data-aos="fade-up" data-aos-duration="1000">
            <div class="card-image-beasiswa">
              <a href="<?php echo base_url ('Home/Beasiswa-detail');?>">
                <img src="<?php echo base_url('assets/images/Cardboard-08 (1).jpg'); ?>" alt="">
              </a>
            </div>
            <div class="bi-body">
              <span>20 nov 2023</span>
              <a href="<?php echo base_url ('Home/Beasiswa-detail');?>">Daftar Mahasiswa penerima Beasiswa Bank Indonesia</a>
            </div>
          </div>
          <div class=" card-beasiswa"data-aos="fade-up" data-aos-duration="1000">
            <div class="card-image-beasiswa">
              <a href="beasiswa-detail.html">
                <img src="<?php echo base_url('assets/images/TAHAP II.jpg'); ?>"  class="img-beasiswa">
              </a>
            </div>
            <div class="bi-body">
              <span>20 nov 2023</span>
              <a href="#">Daftar Mahasiswa Lolos Tahap I Beasiswa Bank Indonesia</a>
            </div>
          </div>
          <div class=" card-beasiswa"data-aos="fade-up" data-aos-duration="1000">
            <div class="card-image-beasiswa">
              <a href="<?php echo base_url ('Home/Beasiswa-detail');?>">
                <img src="<?php echo base_url('assets/images/beasiswa.jpg'); ?>" alt="">
              </a>
            </div>
            <div class="bi-body">
              <span>20 nov 2023</span>
              <a href="#">Daftar Mahasiswa penerima Beasiswa Bank Indonesia</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- ====== Footer Start ====== -->

  <!-- ====== Back To Top Start ====== -->
  <a href="javascript:void(0)" class="back-to-top">
    <i class="lni lni-chevron-up"> </i>
  </a>
  <!-- ====== Back To Top End ====== -->

  <!-- ====== All Javascript Files ====== -->
  <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js'); ?>"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>