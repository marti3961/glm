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
              <h1>PRIVADA LA PALMA</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="current">PRIVADA LA PALMA</li>
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
              <img src="/images/la-palma/la-palma.jpg" alt="">
            </div>
            <!-- <div class="swiper-slide">
              <img src="/images/la-palma/la-palma.jpg" alt="">
            </div> -->
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">

            <div class="portfolio-description">
              <h2>¡Bienvenidos a Privada la Palma!</h2>
              <p>
                  Un desarrollo residencial diseñado por GLM Arquitectura en Poniente 304, Mineral de la Reforma, donde la arquitectura moderna se une con la tranquilidad y el confort familiar.
              </p>
              <p>
                Privada La Palma fue concebida para ofrecer bienestar, seguridad y un entorno ideal para construir recuerdos duraderos.
              </p>

              <p>
                 Hoy celebramos que todas sus viviendas están habitadas, reflejo de la confianza de quienes eligieron este fraccionamiento como su hogar.
              </p>

              <p>
                En GLM Arquitectura seguimos comprometidos con la calidad, el diseño inteligente y la creación de espacios donde las familias puedan crecer con orgullo.
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Información</h3>
              <ul>
                <li><strong>Ubicación:</strong> Poniente 304, Mineral de la Reforma.</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->

  </main>
<?= $this->endSection() ?>