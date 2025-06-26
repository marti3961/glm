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
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <?php $i = 0; ?>
        <?php foreach ($sliders as $slider): ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <img src="<?= $slider['image'] ?>" alt="">
            <div class="carousel-container">
              <div>
                <p><?= $slider['subtitle'] ?></p>
                <h2><?= $slider['title'] ?></h2>
                <a href="<?= $slider['button1_link'] ?>" class="btn-get-started"><?= $slider['button1_text'] ?></a>
              </div>
            </div>
          </div>
          <?php $i++; ?>
        <?php endforeach; ?>
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
        <ol class="carousel-indicators"></ol>
      </div>
    </section><!-- /Hero Section -->
    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>SERVICIOS GLM</h2>
        <p>DONDE TUS SUEÑOS PROSPERAN</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-self-center">

        <!--   <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <img src="/assets/img/icon-service/rentandsale.png" width="40px" alt="" class="src">
              </div>
              <a href="servicios-quieres-rentar-vender" class="stretched-link">
                <h3>¿Quieres Rentar o Vender?</h3>
              </a>
              <p>Deja todo en nuestras manos. Mostramos tu casa, buscamos al cliente ideal y tú solo disfrutas los beneficios.
                <br/>¡Descubre más aquí!</p>
            </div>
          </div>End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="/assets/img/icon-service/En-renta.png" width="40px" alt="" class="src">
              </div>
              <a href="servicios-quieres-rentar" class="stretched-link">
                <h3>Casas en Renta</h3>
              </a>
              <p>Vive cómodo, seguro y sin complicaciones. Casas listas para ti en fraccionamientos con todo lo que necesitas.
                <br/>¡Conoce las opciones que tenemos para ti!</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="/assets/img/icon-service/En-venta.png" width="40px" alt="" class="src">
              </div>
              <a href="servicios-quieres-vender" class="stretched-link">
                <h3>Casas en Venta</h3>
              </a>
              <p>Haz realidad tu sueño de tener casa propia.
                <br/> Conoce nuestras opciones disponibles y da el paso hacia tu nuevo hogar.
                <br/> ¡Descubre tu hogar ideal! </p>
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="/assets/img/icon-service/Financiamiento.png" width="40px" alt="" class="src">
              </div>
              <a href="servicios-quieres-financiamiento" class="stretched-link">
                <h3>Financiamiento a tu Medida</h3>
              </a>
              <p>Te asesoramos para que elijas el crédito que mejor se adapte a ti. 
                 <br/> Infonavit, Fovissste, bancario y más.
                  <br/>¡Conoce más aquí!</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <img src="/assets/img/icon-service/Nuevos-proyec.png" width="40px" alt="" class="src">
              </div>
              <a href="servicios-proximos-proyectos" class="stretched-link">
                <h3>Próximos Proyectos</h3>
              </a>
              <p>Seguimos construyendo nuevos espacios para ti. 
                  <br/>Conoce los desarrollos que vienen y sé de los primeros en elegir.
                  <br/>¡Descubre todo!</p>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- /Services Section -->

  
  <section id="real-estate" class="real-estate section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Nuestros Desarrollos</h2>
        <p>Miles de familias han alcanzado el sueño de tener su hogar con GLM</p>
      </div>
      <div class="container">

        <div class="row gy-4 d-flex justify-content-center">
          <!-- Desarrollo 1-->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/desarrollos/san-antonio.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <!-- <span class="sale-rent">Rent | $1200</span> -->
                <h3><a href="desarrollo-san-antonio-pachuquilla" class="stretched-link">San Antonio Pachuquilla</a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">2 modelos de vivienda</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Desarrollo 1 -->
           <!-- Desarrollo 2-->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/desarrollos/valle-del-alamo.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <h3><a href="desarrollo-valle-del-alamo" class="stretched-link">Valle del Alamo</a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Un espacio ideal donde vivir y crecer.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Desarrollo 2 -->
           <!-- Desarrollo 3-->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/desarrollos/la-palma.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <!-- <span class="sale-rent">Rent | $1200</span> -->
                <h3><a href="desarrollo-privada-la-palma" class="stretched-link">Privada la palma</a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Tranquilidad y el confort familiar.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Desarrollo 3-->
           <!-- Desarrollo 4-->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/desarrollos/paseo-reynas.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <!-- <span class="sale-rent">Rent | $1200</span> -->
                <h3><a href="desarrollo-paseo-de-las-reynas" class="stretched-link">Paseo de las Reynas</a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Diseñado pensando en tu comodidad.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Desarrollo 4 -->
           <!-- Desarrollo 5-->
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/desarrollos/las-peras.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <!-- <span class="sale-rent">Rent | $1200</span> -->
                <h3><a href="desarrollo-las-peras" class="stretched-link">Las Peras</a></h3>
                <div class="card-content d-flex flex-column justify-content-center text-center">
                  <div class="row propery-info">
                    <div class="col">Diseñado pensando en tu comodidad</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Desarrollo 5 -->
        </div>
      </div>
    </section> 
    <!-- /Agents Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonios</h2>
        <p>Bienvenidos a GLM</p>
      </div>
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
                  "slidesPerView": 1,
                  "spaceBetween": 1
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
                    src="https://www.youtube.com/embed/v62dUI9F-is" 
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
                    src="https://www.youtube.com/embed/PhspkIcdCOU" 
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
                    src="https://www.youtube.com/embed/Rm2X9eWZYws" 
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

    </section><!-- /Testimonials Section -->

  </main>

<?= $this->endSection() ?>