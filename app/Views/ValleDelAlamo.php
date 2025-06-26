<?= $this->section('content') ?>
<?php $this->section('metadata');?>
<meta name="description" content="GLM Arquitectura">
<meta name="keywords" content="GLM Arquitectura, Arquitectura, Construcción, Proyectos, Diseño">
<meta name="author" content="GLM Arquitectura.">
<title><?= $site_name ?? 'GLM' ?></title>
<meta property="og:title" content="GLM Arquitectura">
<meta property="og:description" content="GLM Arquitectura - Innovación y Diseño en Arquitectura">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= current_url(); ?>">
<?= $this->endSection();?>
<?= $this->endSection() ?>
<?= $this->extend('layouts/public') ?>
<?= $this->section('content') ?>
<main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>VALLE DEL ÁLAMO</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="current">Valle del Álamo</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Real Estate 2 Section -->
    <section id="real-estate-2" class="real-estate-2 section">

      <div class="container" data-aos="fade-up">

        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">

            <!-- <div class="swiper-slide">

              <img src="/images/valle-alamo/alamo.jpg" alt="">
            </div> -->
<div class="swiper-slide">
              <img src="/images/valle-alamo/alamo.jpg" alt="">
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">

            <div class="portfolio-description">
              <h2>¡Bienvenidos a Privada Valle del Álamo!</h2>
              <p>
                 Un fraccionamiento exclusivo en Villas del Álamo, Mineral de la Reforma, creado por GLM Arquitectura para ofrecerte un espacio ideal donde vivir y crecer.
              </p>
              <p>
                Este desarrollo fue diseñado para brindar comodidad, estilo y una ubicación privilegiada, convirtiéndose en un verdadero hogar para más de una familia.
              </p>

              <p>
                Hoy celebramos el éxito de este proyecto: todas las casas han sido vendidas, reflejo de la confianza que muchas familias han depositado en nosotros para construir su patrimonio.
              </p>

              <p>
                En GLM Arquitectura nos enorgullece ser parte de esos sueños hechos realidad. Seguimos comprometidos con la calidad, el diseño y la atención en cada detalle.
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Información</h3>
              <ul>
                <li><strong>Ubicación:</strong>  Valle del Álamo, Fracc. Campestre Villas del Álamo, Mineral de la Reforma.</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->

  </main>
<?= $this->endSection() ?>