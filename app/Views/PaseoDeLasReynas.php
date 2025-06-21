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
              <h1>Paseo de las Reynas</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Desarrollo</a></li>
            <li class="current">Paseo de las Reynas</li>
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
              <img src="/images/las-reynas/las-reynas.jpg" alt="">
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
              <h2>¡Bienvenidos a Paseo de las Reynas!</h2>
              <p>
                  Un fraccionamiento ubicado en Mineral de la Reforma, Hidalgo, que destaca por sus casas amplias, diseño funcional y una ubicación privilegiada.
                  En GLM Arquitectura nos enorgullece compartir que este desarrollo ya está habitado en su totalidad, muestra del gran interés y satisfacción de las familias que lo eligieron como su nuevo hogar.
              </p>
              <p>
                Diseñado pensando en tu comodidad, Paseo de las Reynas te ofrece un entorno accesible, tranquilo y conectado con todo lo que necesitas: universidades, plazas comerciales, servicios y vías principales a solo minutos de distancia.
              </p>
              <p>
                 Porque sabemos que un buen hogar también comienza con una excelente ubicación, cada detalle de este desarrollo fue pensado para brindarte calidad de vida y conveniencia en tu día a día.
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Información</h3>
              <ul>
                <li><strong>Ubicación:</strong> Paseo de las Reynas, Mineral de la Reforma, Hidalgo.</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->

  </main>
<?= $this->endSection() ?>