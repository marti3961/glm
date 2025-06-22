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
              <h1>CASAS EN ESQUINA</h1>
              <!-- <p>Descubre lo nuevo y especial que hay en GLM</p> -->
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="current">Casas en Esquina</li>
          </ol>
        </div>
      </nav>
    </div>

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
              <img src="images/proyectos-nuevos/casas.jpg" alt="">
            </div>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">

            <div class="portfolio-description">
              <h2>¡Tu espacio ideal te espera en una casa en esquina!</h2>
              <p>
                En GLM, tenemos opciones únicas para ti: casas en esquina con mayor terreno, más privacidad y posibilidades para ampliar, tener jardín, terraza o ese espacio extra que siempre has querido.
              </p>
              <p>
                Estas propiedades no solo ofrecen más metros cuadrados, también te brindan un entorno más abierto y con menor contacto directo con vecinos, ideal para quienes valoran su tranquilidad.
              </p>
              <p>
                Con excelente ubicación, las casas en esquina son limitadas y muy solicitadas.
              </p>
              <p>
                ¡Agenda tu visita y conoce tu próximo hogar con espacio de sobra para disfrutar!
              </p>
            </div>
            <ul class="nav nav-pills mb-3">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                 type="button" role="tab" aria-controls="pills-home" aria-selected="true">Location</button>
                </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                  <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.8138059886023!2d-98.70128810000001!3d20.0582402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a765aa8e7fc9%3A0xa8c799c25388c256!2sFraccionamiento%20San%20Antonio%20Pachuquilla!5e0!3m2!1ses-419!2smx!4v1750566814277!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Información</h3>
              <ul>
                <li><strong>Tipo:</strong> Casa</li>
                <li><strong>Ubicación:</strong> San Antonio Pachuquilla, Mineral de la Reforma Hidalgo.</li>
                <li><strong>Estado:</strong> En Venta</li>
                <li><strong>Terreno:</strong> Desde 113.13m2</li>
                <li><strong>Construcción:</strong> 114m2</li>
                <li><strong>Precio:</strong> Desde $1,242,520</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->
  </main>
<?= $this->endSection() ?>