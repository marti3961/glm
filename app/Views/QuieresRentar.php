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
              <h1>CASAS EN RENTA</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Inicio</a></li>
            <li><a href="/">Servicios</a></li>
            <li class="current">¿Quieres rentar?</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

            <div class="service-box">
              <h4>Servicios GLM</h4>
              <div class="services-list">
                <a href="servicios-quieres-rentar" class="active"><i class="bi bi-arrow-right-circle"></i><span>¿Quieres rentar?</span></a>
                <a href="servicios-quieres-vender"><i class="bi bi-arrow-right-circle"></i><span>¿Quieres vender?</span></a>
                <a href="servicios-quieres-financiamiento"><i class="bi bi-arrow-right-circle"></i><span>¿Quieres financiamiento?</span></a>
                <a href="proximos-proyectos"><i class="bi bi-arrow-right-circle"></i><span>Próximos proyectos</span></a>
              </div>
            </div>

            <!-- <div class="service-box">
              <h4>Download Catalog</h4>
              <div class="download-catalog">
                <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a>
              </div>
            </div> -->

            <div class="help-box d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-headset help-icon"></i>
              <h4>Tienes preguntas?</h4>
              <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span><?= $site_phone ?></span></p>
              <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a href="mailto:contact@example.com"><?= $site_email ?></a></p>
            </div>

          </div>

          <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/servicios/Detalles-Servicios2.jpg" alt="" class="img-fluid services-img">
            <h3>¡Rentar con GLM es más fácil de lo que imaginas!</h3>
            <p>¿Aún no estás listo para comprar? Tenemos casas en renta listas para ti, en fraccionamientos cómodos, seguros y con todo lo que necesitas para vivir tranquilo desde el primer día.</p>
            <ul>
                <li><i class="bi bi-check-circle"></i><span>Sin complicaciones</span></li>
                <li><i class="bi bi-check-circle"></i><span>Listas para habitar</span></li>
                <li><i class="bi bi-check-circle"></i><span>Excelentes ubicaciones</span></li>
                <li><i class="bi bi-check-circle"></i><span>Vive hoy donde siempre has querido… ¡y da el primer paso hacia tu hogar ideal!</span></li>

            </ul>
            <p>
               Escríbenos y conoce las opciones disponibles.<br/><br/>
               <a href="" class="btn btn-secondary">CONOCE NUESTRAS CASAS EN RENTA</a> 
            </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

<?= $this->endSection() ?>