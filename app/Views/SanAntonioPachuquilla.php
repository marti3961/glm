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
              <h1>SAN ANTONIO PACHUQUILLA</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
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
              <h2>¡Bienvenidos a San Antonio Pachuquilla!</h2>
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
    <section id="real-estate" class="real-estate section">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="images/san-antonio/monserrat_petite.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <span class="sale-rent">Desde | $839,000</span>
                <h3><a href="san-antonio-monserrat-petite" class="stretched-link">Modelo Monserrat Petite</a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Construcción</div>
                    <div class="col">Terreno</div>
                    <div class="col">Recámaras</div>
                    <div class="col">Baños</div>
                  </div>
                  <div class="row">
                    <div class="col">79.45m2</div>
                    <div class="col">80.4m2</div>
                    <div class="col">2 o 3</div>
                    <div class="col">1.5</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="images/san-antonio/monserrat.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <span class="sale-rent">Desde $1,210,000</span>
                <h3><a href="san-antonio-monserrat" class="stretched-link">Model Monserrat</a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Construcción</div>
                    <div class="col">Terreno</div>
                    <div class="col">Recámaras</div>
                    <div class="col">Baños</div>
                  </div>
                  <div class="row">
                    <div class="col">114m2</div>
                    <div class="col">105m2</div>
                    <div class="col">3</div>
                    <div class="col">1.5</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>     
        <ul class="nav nav-pills mb-3">
            <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
              type="button" role="tab" aria-controls="pills-home" aria-selected="true">Videos</button>
            </li>
        </ul>
        <div class="tab-content">
          <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 3,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 2,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="video-container">
                      <iframe 
                        width="100%" 
                        height="315" 
                        src="https://www.youtube.com/embed/TyZfwAhbyjI" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                      </iframe>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="video-container">
                      <iframe 
                        width="100%" 
                        height="315" 
                        src="https://www.youtube.com/embed/TyZfwAhbyjI" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                      </iframe>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /Real Estate 2 Section -->
    
  </main>
<?= $this->endSection() ?>