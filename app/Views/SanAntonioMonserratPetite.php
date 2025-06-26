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
              <h1>Monserrat Petite</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="current">Monserrat Petite</li>
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
              <img src="images/san-antonio/monserrat-petit/monserrat.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/san-antonio/monserrat-petit/recamara.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/san-antonio/monserrat-petit/sala.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/san-antonio/monserrat-petit/room2.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="images/san-antonio/monserrat-petit/bath.jpg" alt="">
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">

            <div class="portfolio-description">
              <h2>¡Todo lo que necesitas, en la medida perfecta!</h2>
              <p>
                    <b>Monserrat Petite</b><br/><br/>
                    Desde 79.45m2 de terreno<br/>
                    Desde 80.4m2 de construcción<br/>
                    Servicios ocultos<br/>
                    Opción de crecimiento<br/>
                    Construccion con block<br/><br/>

                    Cocina independiente<br/>
                    1.5 Baños<br/>
                    2 o 3 Recámaras<br/>
                    Sala - comedor<br/>
                    Jardín frontal y posterior<br/>
                    Patio de servicio<br/><br/>

                    Desde: $839,000.00<br/>
                    Vigencia  Julio 2025
              </p>
            </div>
            <ul class="nav nav-pills mb-3">
                <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                 type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ubicación</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link " id="planta-baja-tab" data-bs-toggle="pill" data-bs-target="#planta-baja"
                 type="button" role="tab" aria-controls="planta-baja" aria-selected="true">Opción 2 Recamaras</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link " id="planta-alta-tab" data-bs-toggle="pill" data-bs-target="#planta-alta"
                 type="button" role="tab" aria-controls="planta-alta" aria-selected="true">Opción 3 Recamaras</button>
                </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                  <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.8138059886023!2d-98.70128810000001!3d20.0582402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a765aa8e7fc9%3A0xa8c799c25388c256!2sFraccionamiento%20San%20Antonio%20Pachuquilla!5e0!3m2!1ses-419!2smx!4v1750566814277!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="tab-pane fade show " id="planta-baja" role="tabpanel" aria-labelledby="planta-baja-tab" tabindex="0">
                  <img src="images/san-antonio/monserrat-petit/floor2.jpg" alt="" style="height: 400px;" />
              </div>
              <div class="tab-pane fade show " id="planta-alta" role="tabpanel" aria-labelledby="planta-alta-tab" tabindex="0">
                  <img src="images/san-antonio/monserrat-petit/floor1.jpg" alt="" style="height: 400px;" />
              </div>
            </div>
          </div>
          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Información</h3>
              <ul>
                <li><strong>Model:</strong> Monserrat Petite</li>
                <li><strong>Ubicación:</strong> San Antonio Pachuquilla, Mineral de la Reforma Hidalgo.</li>
                <li><strong>Tipo:</strong> Casa</li>
                <li><strong>Estado:</strong> En Venta</li>
                <li><strong>Area:</strong> Desde 79.45m2</li>
                <li><strong>Recamaras:</strong> Desde 2</li>
                <li><strong>Baños:</strong> 1.5</li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->
  </main>
<?= $this->endSection() ?>