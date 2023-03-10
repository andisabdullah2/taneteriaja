<?php 
use App\Models\Menu_model;
use App\Models\Galeri_model;
$galeri = new Galeri_model;
$menu    = new Menu_model();
$berita  = $menu->berita();
$profil  = $menu->profil();
$layanan = $menu->layanan();
$galeri = $galeri->galeri();
?>

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <?php $noslide = 1;

foreach ($slider as $slider) {  ?>
        <!-- Slide 1 -->
        <div class="carousel-item<?php if ($noslide === 1) {
    echo ' active';
} ?>" style="background-image: url(<?= base_url('assets/upload/image/' . $slider['gambar']) ?>)">
          <?php if ($slider['status_text'] === 'Ya') {  ?>
          <div class="container" style="max-width: 70%; text-align: left; padding-left: 2%; padding-right: 2%;">
                <h2><?= $slider['judul_galeri'] ?></h2>
                <p><?= $slider['isi'] ?></p>
            </div>
          <?php } ?>
        </div>
        <?php $noslide++; } ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->


  <main id="main">
    <!-- ======= Sambutan  Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sambutan Camat <?= $konfigurasi['namaweb'] ?></h2>
         <?= $konfigurasi['deskripsi'] ?>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?= icon() ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <?= $konfigurasi['tentang'] ?>
          </div>
        </div>

      </div>
    </section><!-- End Sambutan  Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Gallery</h2>
            <p><?= tagline() ?></p>
        </div>
        <div class="gallery-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php foreach ($galeri as $galeri) { ?>
            <div class="swiper-slide">
              <a class="gallery-lightbox" href="<?= base_url('assets/upload/image/' . $galeri['gambar']) ?>">
                <img src="<?= base_url('assets/upload/image/' . $galeri['gambar']) ?>" class="img-fluid" alt="<?= $galeri['judul_galeri'] ?>">
              </a>
            </div>
           <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>


    <?php include 'berita.php'?>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div>
        <style type="text/css" media="screen">
          iframe {
            min-height: 300px;
            width: 100%;
          }
        </style>
        <?= google_map() ?>
      </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
<style>
  #hero .container {
    text-align: center;
    background: rgba(255, 255, 255, 0.9);
    padding-top: 30px;
    padding-bottom: 30px;
    margin-bottom: 50px;
    border-top: 4px solid #00D100;
  }
  #hero .btn-get-started {
    font-family: "Roboto", sans-serif;
    font-weight: 500;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 14px 32px;
    border-radius: 4px;
    transition: 0.5s;
    line-height: 1;
    color: #fff;
    background: #00D100;
  }
  #hero .carousel-control-next-icon, #hero .carousel-control-prev-icon {
    background: none;
    font-size: 30px;
    line-height: 0;
    width: auto;
    height: auto;
    background: #00D100;
    border-radius: 50px;
    transition: 0.3s;
    color: rgba(255, 255, 255, 0.5);
    width: 54px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #hero .carousel-control-next-icon:hover, #hero .carousel-control-prev-icon:hover {
  background: #00D100;
  color: rgba(255, 255, 255, 0.8);
  }
  #hero .carousel-indicators li {
    cursor: pointer;
    background: #00D100;
    overflow: hidden;
    border: 0;
    width: 12px;
    height: 12px;
    border-radius: 50px;
    opacity: .6;
    transition: 0.3s;
  }

  #hero .carousel-indicators li.active {
    opacity: 1;
    background: #00D100;
  }
  .gallery {
  overflow: hidden;
  }

  .gallery .swiper-pagination {
    margin-top: 20px;
    position: relative;
  }

  .gallery .swiper-pagination .swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background-color: #fff;
    opacity: 1;
    border: 1px solid #00D100;
  }

  .gallery .swiper-pagination .swiper-pagination-bullet-active {
    background-color: #00D100;
  }

  .gallery .swiper-slide-active {
    text-align: center;
  }

  @media (min-width: 992px) {
    .gallery .swiper-wrapper {
      padding: 40px 0;
    }
    .gallery .swiper-slide-active {
      border: 6px solid #00D100;
      padding: 4px;
      background: #fff;
      z-index: 1;
      transform: scale(1.2);
      margin-top: 10px;
    }
  }
</style>