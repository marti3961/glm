<?= $this->extend('layouts/public') ?>
<?php $this->section('metadata');?>
<meta name="description" content="Contáctenos para obtener más información sobre nuestros servicios de concreto, obra civil, cemento y asesoría. Estamos aquí para ayudarle a construir hoy mismo.">
<meta name="keywords" content="Contacto, Concreto, Obra Civil, Cemento, Asesoría, Construcción, GLM">
<meta name="author" content="GLM Concretos S.A. de C.V.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:title" content="Contáctenos - GLM">
<meta property="og:description" content="Contáctenos para obtener más información sobre nuestros servicios de concreto, obra civil, cemento y asesoría. Estamos aquí para ayudarle a construir hoy mismo.">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= current_url() ?>">
<title>En Construcción</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>

    <style>
        body {
            background: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .icon {
            font-size: 64px;
            color: #ffc107;
            margin-bottom: 20px;
        }
        h1 {
            margin-bottom: 10px;
        }
        p {
            color: #666;
        }
    </style>
<main class="main">

    <div class="container">
        <div class="icon">🚧</div>
        <h1>Página en Construcción</h1>
        <p>Estamos trabajando para mejorar nuestro sitio.<br>
        Vuelve pronto.</p>
    </div>
</main>
<?= $this->endSection() ?>