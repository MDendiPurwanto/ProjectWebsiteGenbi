

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
      href="assets/images/logo.png"
      type="image/svg"
    />
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
              <h1>Daftar Gallery GenBI Cirebon</h1>
              <ol class="banner-link">
                <li class="banner-link-nav">
                  <a class="nav-satu"  href="">Home</a>
                </li>
    
                <li class="banner-link-nav">
                  <a class="active" href="">Gallery</a>
                </li> 
              </ol>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ====== Banner End ====== -->
       <section class="galeri" id="galeri">
        <div class="container">
          <div class="ud-section-title mx-auto text-center"data-aos="fade-up" data-aos-duration="1000">
            <span class="tag">Gallery</span>
            <h2>Galeri GenBI Cirebon</h2>
          </div>
          <div class="wrapper-gallery">
            <!-- filter Items -->
            <nav>
              <div class="items" data-aos="fade-down" data-aos-duration="1000">
                <span class="item active" data-name="all">All</span>
                <span class="item " data-name="lc">LC</span>
                <span class="item" data-name="iain ">IAIN </span>
                <span class="item" data-name="unma">UNMA</span>
                <span class="item" data-name="uniku">UNIKU</span>
                <span class="item" data-name="uibbc">UIBBC</span>
                <span class="item" data-name="unwir">UNWIR</span>
              </div>
            </nav>
            <!-- filter Images -->
            <div class="gallery">
              <div class="image" data-name="lc" data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/lc6.JPG" alt=""></span></div>
              <div class="image" data-name="iain "data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/IMG_1965.JPG" alt=""></span></div>
              <div class="image" data-name="uibbc"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/20150212003631_IMG_1957.JPG" alt=""></span></div>
              <div class="image" data-name="unma"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/champs.jpg" alt=""></span></div>
              <div class="image" data-name="lc"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/Snapinsta.app_356031888_660577115476723_4676831135056140397_n_1080.jpg" alt=""></span></div>
              <div class="image" data-name="uibbc" data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/IMG20230114094410.jpg" alt=""></span></div>
              <div class="image" data-name="lc"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/loginbg.JPG" alt=""></span></div>
              <div class="image" data-name="uniku"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/IMG-20230312-WA0031.jpg" alt=""></span></div>
              <div class="image" data-name="unma" data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/unma8.JPG" alt=""></span></div>
              <div class="image" data-name="unwir"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/6d915b10-35f6-4dd5-958c-17ac439faf06.jpg" alt=""></span></div>
              <div class="image" data-name="unma"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/unma2.jpg" alt=""></span></div>
              <div class="image" data-name="unma"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/unma8.JPG" alt=""></span></div>
              <div class="image" data-name="unwir"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/6d915b10-35f6-4dd5-958c-17ac439faf06.jpg" alt=""></span></div>
              <div class="image" data-name="lc"><span data-aos="fade-up" data-aos-duration="1000"><img src="assets/images/lc1.JPG" alt=""></span></div>
              <div class="image" data-name="unma"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/unma2.jpg" alt=""></span></div>
              <div class="image" data-name="unma"data-aos="fade-up" data-aos-duration="1000"><span><img src="assets/images/unma2.jpg" alt=""></span></div>
            </div>
            <div class="button-center" data-aos="zoom-in">
              <a  class="showLess ud-main-btn ud-link-btn " id="showLess" style="display: none;">Lihat lebih sedikit </i></a>
              <a  class="loadMore ud-main-btn ud-link-btn" id="loadMore">Lihat Lebih Banyak</a>
            </div>
          </div>
          <!-- fullscreen img preview box -->
          <div class="preview-box">
            <div class="details">               <span class="title">Image kategori: <p></p></span>
              <span class="icon fas fa-times button-close"><i class="lni lni-close"></i></span>
            </div>
            <div class="image-box"><img src="" alt="">
              <span class="prev icon prev-button btn-prev"><i class="lni lni-chevron-left"></i></span>
              <span class="next icon next-button btn-next"><i class="lni lni-chevron-right"></i></span>
            </div>
          </div>
          <div class="shadow"></div>
        </div>
       </section>

   <!-- ====== Footer Start ====== -->
<footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
      <div class="ud-footer-widgets">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
              <div class="ud-widget">
                <a href="index.html" class="ud-footer-logo">
                  <img src="assets/images/GenBI original.png" alt="logo" />
                </a>

                <p  class="ud-widget-desc">
                  Generasi Baru Indonesia a.k.a GenBI ialah sebuah komunitas yang terdiri dari beberapa kumpulan mahasiswa dari berbagai universitas pada sebuah wilayah yang terpilih sebagai penerima beasiswa Bank Indonesia.
                </p>
                <ul class="ud-widget-socials">
                  <li>
                    <a href="#" class="facebook">
                      <i class="lni lni-facebook-filled icon-footer facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="instagram">
                      <i class="lni lni-instagram-filled icon-footer instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <i class="lni lni-twitter-filled icon-footer"></i>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0)" class="linkedin">
                      <i class="lni lni-youtube icon-footer"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Alamat</h5>
                <ul class="ud-widget-links">
                  <li>
                    <a href="javascript:void(0)">Jl. Yos Sudarso No.5-7, Lemahwungkuk, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45111</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Link</h5>
                <ul class="ud-widget-links">
                  <li>
                    <a href="javascript:void(0)">kegiatan</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">beasiswa</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Blog</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">Tentang</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Kontak</h5>
                <ul class="ud-widget-links">
                  <li>
                    <a
                      href="#"
                      >00000000
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      >@gmail.com
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-8 col-sm-10">
              <div class="ud-widget">
                <h5 class="ud-widget-title">Suport</h5>
                <ul class="ud-widget-brands">
                  <li>
                    <a
                      href="#"
                    >
                      <img
                        src="assets/images/bi-b.png"
                        alt="ayroui"
                      />
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ud-footer-bottom">
        <div class="container">
              <p class="ud-footer-bottom-right">
                <a href="#" rel="nofollow">© 2023 • GenBI Cirebon 2023</a>
              </p>
        </div>
      </div>
    </footer>

    <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/cdnjs.cloudflare.com_ajax_libs_jquery_3.5.1_jquery.min.js"></script>
    <script src="assets/js/cdnjs.cloudflare.com_ajax_libs_magnific-popup.js_1.1.0_jquery.magnific-popup.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>

const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".gallery .image");
const prevButton = document.querySelector(".prev-button");
const nextButton = document.querySelector(".next-button");

let currentImageIndex = 0;

window.onload = () => {
  filterItem.onclick = (selectedItem) => {
    if (selectedItem.target.classList.contains("item")) {
      filterItem.querySelector(".active").classList.remove("active");
      selectedItem.target.classList.add("active");
      let filterName = selectedItem.target.getAttribute("data-name");
      filterImg.forEach((image) => {
        let filterImges = image.getAttribute("data-name");
        if (filterImges == filterName || filterName == "all") {
          image.classList.remove("hide");
          image.classList.add("show");
        } else {
          image.classList.add("hide");
          image.classList.remove("show");
        }
      });
    }
  };
  for (let i = 0; i < filterImg.length; i++) {
    filterImg[i].setAttribute("onclick", `preview(this, ${i})`);
  }
};

const previewBox = document.querySelector(".preview-box");
const categoryName = previewBox.querySelector(".title p");
const previewImg = previewBox.querySelector("img");
const closeIcon = previewBox.querySelector(".icon");
const shadow = document.querySelector(".shadow");

function showImage(index) {
  let selectedImage = filterImg[index];
  let selectedPrevImg = selectedImage.querySelector("img").src;
  let selectedImgCategory = selectedImage.getAttribute("data-name");
  previewImg.src = selectedPrevImg;
  categoryName.textContent = selectedImgCategory;
}

function showNextImage() {
  currentImageIndex = (currentImageIndex + 1) % filterImg.length;
  showImage(currentImageIndex);
}

function showPrevImage() {
  currentImageIndex = (currentImageIndex - 1 + filterImg.length) % filterImg.length;
  showImage(currentImageIndex);
}

function hidePreview() {
  previewBox.classList.remove("show");
  shadow.classList.remove("show");
  document.querySelector("body").style.overflow = "auto";
}

function setupPreview() {
  closeIcon.onclick = hidePreview;
}

function preview(element, index) {
  document.querySelector("body").style.overflow = "hidden";
  currentImageIndex = index;
  showImage(currentImageIndex);
  previewBox.classList.add("show");
  shadow.classList.add("show");
  setupPreview();
}

prevButton.addEventListener("click", showPrevImage);
nextButton.addEventListener("click", showNextImage);

    </script>

<script>
  $(document).ready(function () {
var list = $(".image");
var numToShow = 4;
var buttonLoadMore = $("#loadMore");
var buttonShowLess = $("#showLess");
var numInList = list.length;

list.hide();
if (numInList > numToShow) {
buttonLoadMore.show();
}
list.slice(0, numToShow * 3).show(); // Menampilkan 6 kartu pertama

buttonLoadMore.click(function () {
var showing = list.filter(":visible").length;
list.slice(showing, showing + numToShow).fadeIn();
var nowShowing = list.filter(":visible").length;
if (nowShowing >= numInList) {
  buttonLoadMore.hide();
  buttonShowLess.show();
}
});

buttonShowLess.click(function () {
list.hide();
list.slice(0, numToShow * 3).show(); // Menampilkan 6 kartu pertama
buttonLoadMore.show();
buttonShowLess.hide();
});
});


</script>
<script>
  AOS.init();
</script>
  </body>
</html>
