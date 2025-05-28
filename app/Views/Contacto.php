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
<title>Contáctenos - GLM</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/Contacto.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contáctenos</h1>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h3 class="section-sub-title">Construye hoy mismo</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
          <a href="https://web.whatsapp.com/send?phone=<?= str_replace('-', '', $site_whatsapp ?? '') ?>&text=Hola%20quiero%20más%20información" target="_blank"><i class="fab fa-whatsapp mr-0"></i></a>
          </span>
          <div class="ts-service-box-content">
            <h4>whatsapp</h4>
            <p><?= $site_whatsapp ?? '#' ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
          <a href="mailto:<?= $site_email ?? '#' ?>"><i class="fa fa-envelope mr-0"></i></a>
          </span>
          <div class="ts-service-box-content">
            <h4>Escribanos</h4>
            <p><?= $site_email ?? '#' ?></p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <a href="tel:<?= $site_phone ?? '#' ?>"><i class="fa fa-phone-square mr-0"></i></a>
          </span>
          <div class="ts-service-box-content">
            <h4>Llámenos</h4>
            <p><?= $site_phone ?? '#' ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="gap-60"></div>
    <div class="google-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1874.4725056436546!2d-98.83046327062112!3d20.01082246432833!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a21b3c26aac9%3A0xf86ee64edcfd068f!2sCarr.%20Acayuca%2C%2042191%20Hgo.!5e0!3m2!1ses!2smx!4v1744491694214!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="gap-40"></div>
    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">No dude en ponerse en contacto con nosotros.</h3>
        <div id="result" class="alert alert-success d-none mt-5">
          <p></p>
        </div>
        <form id="contactForm" action="#" method="post" role="form">
        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
          <div class="error-container"></div>
            <div class="row">
              <div class="col-md-4 mb-4">
                <div class="form-floating">
                  <input class="form-control" name="nombre" id="nombre" placeholder="" type="text" required>
                  <label for="name">Nombre</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-floating">
                  <input class="form-control" name="apellidos" id="apellidos" placeholder="" type="text" required>
                  <label for="apellido">Apellidos</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-floating">
                  <input class="form-control" name="empresa" id="empresa" placeholder="" type="text" required>
                  <label for="empresa">Empresa</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-floating">
                  <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="771-111-11-11" required>
                  <label for="telefono">Teléfono</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com" required>
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="col-md-4 mb-4">
                <div class="form-floating">
                  <select class="form-control" name="asunto" id="asunto" required>
                    <option value="" disabled selected>Seleccione un servicio</option>
                    <option value="Concreto">Concreto</option>
                    <option value="Obra Civil">Obra Civil</option>
                    <option value="Cemento">Cemento</option>
                    <option value="Asesoria">Asesoría</option>
                  </select>
                  <label for="asunto">Servicio</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-4">
            <div class="form-floating">
              <textarea class="form-control form-control-message" name="mensaje" id="mensaje" placeholder="" rows="10"
                required></textarea>
                <label for="message">Mensaje</label>
            </div>
          </div>
          <div class="col-12 mx-auto mt-3">
            <div class="d-grid">
              <button class="btn btn-primary solid blank"  type="submit">Enviar Mensaje</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm');
  const result = document.getElementById('result');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch('contacto/enviarMensaje', {method: 'POST', body: formData})
    .then(response => response.json())
    .then(res => {
      result.innerHTML = `<p>${res.message}</p>`;
      // show the result 
      result.classList.remove('d-none');
            setTimeout(() => {
              result.classList.add('d-none');
            }, 3000);
      // Actualizar el token CSRF si viene en la respuesta
      if (res.csrf) {
        const csrfInput = form.querySelector('input[name="<?= csrf_token() ?>"]');
        if (csrfInput) csrfInput.value = res.csrf;
      }
      // Limpiar el formulario
      form.reset();
    })
    .catch(() => {
      result.innerHTML = '<p style="color:red;">Ocurrió un error en el servidor.</p>';
      result.classList.remove('d-none');
      result.classList.remove('alert-danger');
            setTimeout(() => {
              result.classList.add('d-none');
              result.classList.add('alert-success');
            }, 3000);
    });
  });
});
</script>
<?= $this->endSection() ?>
