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
    <div class="page-title aos-init aos-animate" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>GLM</h1>
              <p class="mb-0">Más de 20 años contribuyendo en el crecimiento económico y desarrollo de hogares.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li class="current">¿Quienes somos?</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">¿Quienes somos?</p>
            <h3>Unleashing Potential with Creative Strategy</h3>
            <p class="fst-italic">
                En GLM somos una empresa 100% mexicana, construida con amor, cimentada en valores y dedicada a crear hogares con esmero.
                <ul>
                <li><i class="bi bi-check-circle"></i> <span>Creemos en el poder del esfuerzo, la solidaridad y el compromiso.</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Cada inmueble que desarrollamos refleja nuestra pasión por hacer bien las cosas y ofrecer a cada familia un espacio digno, cálido y duradero.</span></li>
                </ul>
                Ya sea que compres, rentes o remodeles con nosotros, puedes tener la tranquilidad de que estás eligiendo una empresa con más de 20 años de experiencia y una sólida trayectoria como desarrolladores de vivienda.
                <br/>
                Más de 4,000 familias han confiado en GLM, y junto a ellas hemos contribuido al crecimiento económico y al desarrollo de comunidades donde las personas pueden vivir, crecer y prosperar.
            </p>
          </div>

          <div class="col-lg-6 about-images aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/nosotros/quienes-somos.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/nosotros/quienes-somos2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/nosotros/quienes-somos3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>
    <section id="stats" class="stats section">
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-people-roof"></i>
              <div>
                <p><span data-purecounter-start="0" data-purecounter-end="4000" data-purecounter-duration="0" class="purecounter">4000</span></p>
                <p>Familias Felices</p>
              </div>
            </div>
          </div><!-- End Stats Item -->
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-truck-ramp-box"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">5</span>
                <p>Desarrollos Entregados</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-house-circle-check"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="4000" data-purecounter-duration="0" class="purecounter">4000</span>
                <p>Hogares Construidos</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="fa-solid fa-award"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="0" class="purecounter">20</span>
                <p>Años de experiencia</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/nosotros/quienes-somos4.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center aos-init" data-aos="fade-up" data-aos-delay="200">
            <h3>Nuestra misión</h3>
            <p>
                Somos una empresa hidalguense que desarrolla soluciones de vivienda adaptadas a las necesidades de cada cliente, mediante:
                <br/>- Proyectos de calidad
                <br/>- Innovación constante en nuestros productos
                <br/>- Un equipo comprometido y motivado al éxito
            </p>
            <h3>Nuestra visión</h3>
            <p>
                Ser la empresa líder en proyectos de urbanización a nivel nacional, atendiendo la demanda inmobiliaria con un alto sentido de calidad y compromiso hacia nuestros clientes.

            </p>
            <h3>Compromiso y confianza</h3>
            <p>
                Somos orgullosos miembros de la Cámara Nacional de la Industria de Desarrollo y Promoción de Vivienda (CANADEVI) y de la Asociación Mexicana de Profesionales Inmobiliarios, A.C. (AMPI).
                <br/>Estamos avalados como desarrolladores certificados, trabajando bajo los más altos estándares de construcción y cumplimiento normativo, lo que garantiza calidad, transparencia y confianza para tu patrimonio.
            </p>

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

  </main>
<?= $this->endSection() ?>