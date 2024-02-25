<!-- =========

	Template Name: Play
	Author: UIdeck
	Author URI: https://uideck.com/
	Support: https://uideck.com/support/
	Version: 1.1

========== -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GenBI Cirebon</title>

    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/animate.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/lineiconse.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/ud-styles.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/aos.css');?>" />
  </head>
  <body>
    <!-- ====== Header Start ====== -->
  
    <!-- ====== Header End ====== -->

    <!-- ====== Banner Start ====== -->
    <section class="ud-page-banner-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-banner-genbi-content">
            <h1>Kontak </h1>
            <ol class="banner-link">
              <li class="banner-link-nav">
                <a class="nav-satu" href="index.html">Home</a>
              </li>

              <li class="banner-link-nav">
                <a class="active" href="about.html">kontak</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- ====== Banner End ====== -->

    <!-- ====== Contact Start ====== -->
    <section id="contact" class="ud-contact">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-8 col-lg-7">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title">
                <span data-aos="fade-right" data-aos-duration="1000">CONTACT US</span>
                <h2 data-aos="fade-left" data-aos-duration="1000">
                  Let’s talk about <br />
                  Love to hear from you!
                </h2>
              </div>
              <div class="ud-contact-info-wrapper">
                <div class="ud-single-info" data-aos="fade-up" data-aos-duration="1000">
                  <div class="ud-info-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="ud-info-meta" >
                    <h5>Alamat</h5>
                    <p>
                    Jl. Yos Sudarso No.5-7, Lemahwungkuk, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45111</p>
                  </div>
                </div>
                <div class="ud-single-info" data-aos="fade-up" data-aos-duration="1000">
                  <div class="ud-info-icon">
                    <i class="lni lni-envelope"></i>
                  </div>
                  <div class="ud-info-meta" >
                    <h5>Messege</h5>
                    <p>genbicirebon@gmail.com</p>
                    <p>genbi.cirebon1411@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div
              class="ud-contact-form-wrapper wow fadeInUp"
              data-wow-delay=".2s" data-aos="fade-up" data-aos-duration="1000"
            >
              <h3 class="ud-contact-form-title" data-aos="fade-left" data-aos-duration="1000">Kirimkan Pesan</h3>
              <form class="ud-contact-form">
                <div class="ud-form-group">
                  <label for="fullName"data-aos="fade-right" data-aos-duration="1000">Nama Lengkap *</label>
                  <input
                    type="text"
                    name="fullName"
                    placeholder="Ricky Ahmad" data-aos="fade-left" data-aos-duration="1000"
                  />
                </div>
                <div class="ud-form-group">
                  <label for="email" data-aos="fade-right" data-aos-duration="1000">Email*</label>
                  <input
                    type="email"
                    name="email"
                    placeholder="example@yourmail.com" data-aos="fade-left" data-aos-duration="1000"
                  />
                </div>
                <div class="ud-form-group">
                  <label for="phone"data-aos="fade-right" data-aos-duration="1000">no.hp*</label>
                  <input
                    type="text"
                    name="phone"
                    placeholder="+62 821 5211 552" data-aos="fade-left" data-aos-duration="1000"
                  />
                </div>
                <div class="ud-form-group">
                  <label for="message"data-aos="fade-right" data-aos-duration="1000">Pesan*</label>
                  <textarea
                    name="message"
                    rows="1"
                    placeholder="type your message here" data-aos="fade-left" data-aos-duration="1000"
                  ></textarea>
                </div>
                <div class="ud-form-group mb-0">
                  <button type="submit" class="ud-main-btn">
                    Kirim pesan
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact End ====== -->

    <!-- ====== Footer Start ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="<?php echo base_url ('assets/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo base_url ('assets/js/wow.min..js');?>"></script>
    <script src="<?php echo base_url ('assets/js/main.js');?>"></script>
    <script src="<?php echo base_url ('assets/js/aos.js');?>"></script>
    <script>AOS.init();</script>
  </body>
</html>
