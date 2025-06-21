<?= $this->section('content') ?>
<?php $this->section('metadata');?>
<meta name="description" content="GLM Arquitectos">
<meta name="keywords" content="GLM Arquitectos, Arquitectura, Construcción, Proyectos, Diseño">
<meta name="author" content="GLM Arquitectos.">
<title><?= $site_name ?? 'GLM' ?></title>
<meta property="og:title" content="GLM Arquitectos">
<meta property="og:description" content="GLM Arquitectos - Innovación y Diseño en Arquitectura">
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
              <h1>SAN ANTONIO PACHUQUILLA</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Desarrollo</a></li>
            <li class="current">San Antonio Pachuquilla</li>
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
            <div class="swiper-slide">
              <img src="/images/san-antonio/san_antonio.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="/images/san-antonio/san_antonio_2.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="/images/san-antonio/san_antonio_3.jpg" alt="">
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">

            <div class="portfolio-description">
              <h2>¡Bienvenidos a San Atonio Pachuquilla!</h2>
              <p>
                 Vive en un espacio cómodo, acogedor y bien ubicado. Este desarrollo se encuentra a solo 10 minutos del centro de Pachuquilla, con acceso rápido a todo lo que necesitas para tu día a día.
                  Cercano a servicios como:
              </p>
              <p>
                <ul>
                  <li>Aurrera, Coppel, Elektra, Banco Azteca, tiendas y servicios municipales (a 15 min)</li>
                  <li>Walmart Villa Airosa (a 18 min)</li>
                  <li>Centro de Pachuca (a 25 min)</li>
                </ul>
              </p>

              <p>
                Además, el fraccionamiento contempla proyectos de construcción para una escuela, áreas verdes y un jardín de juegos, brindando a tu familia un entorno seguro, familiar y con excelente proyección de crecimiento.
              </p>

              <p>
                <b>¡Tu nuevo hogar te espera en una ubicación estratégica y con todo por disfrutar!</b>
                <br/>Te esperamos para conocerte
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Información</h3>
              <ul>
                <li><strong>Ubicación:</strong> San Antonio Pachuquilla, Mineral de la Reforma, Hidalgo CP. 42186</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->

  </main>
<?= $this->endSection() ?>