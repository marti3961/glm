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
              <h1>PRÓXIMOS PROYECTOS</h1>
              <p>Descubre lo nuevo y especial que hay en GLM</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="current">Próximos Proyectos</li>
          </ol>
        </div>
      </nav>
    </div>
    <section id="real-estate" class="real-estate section">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="images/proyectos/renta.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <h3><a href="proximos-proyectos-locales" class="stretched-link">LOCALES EN RENTA</a></h3>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="images/proyectos/esquina.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <h3><a href="proximos-proyectos-casas" class="stretched-link">CASAS EN ESQUINA</a></h3>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="images/proyectos/plaza.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <h3><a href="proximos-proyectos-plazas" class="stretched-link">PLAZA MINA LORETO</a></h3>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="images/proyectos/terrenos.jpg" alt="" class="img-fluid">
              <div class="card-body">
                <h3><a href="proximos-proyectos-terrenos" class="stretched-link">TERRENOS EN VENTA</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

  </main>
<?= $this->endSection() ?>