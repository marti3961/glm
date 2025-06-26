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
<title>CONTÁCTANOS</title>
<?= $this->endSection();?>
<?= $this->section('content') ?>
  <main class="main">

<div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>CONTÁCTANOS  </h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="<?= base_url() ?>">Inicio</a></li>
            <li class="current">Contáctanos</li>
          </ol>
        </div>
      </nav>
  </div>
      <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.1524194373965!2d-98.7103508!3d20.0859144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a7b7896446b1%3A0x3574f87c6e258e55!2sGLM%20ARQUITECTURA!5e0!3m2!1ses-419!2smx!4v1750904889543!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Dirección</h4>
                <p>Av Reyna de los Venturosos 1003</p>
                <p>Privada de las Reynas V, 42184 Paseo de las Reynas, Hgo.</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Llámanos</h3>
                <p><?= $site_phone ?? $site_whatsapp ?></p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Escríbenos</h3>
                <p><?= $site_email ?? '#' ?></p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
              <div id="result" class="alert alert-success d-none mt-5"></div>
              <form id="contactForm" action="#" method="post" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
              <div class="row my-4">
                <div class="col">
                  <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="col">
                  <input type="email" id="correo" class="form-control" name="correo" placeholder="Correo" required>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-6">
                  <input type="tel" placeholder="Telefono" class="form-control rounded-0" 
                  id="telefono" name="telefono" pattern="[0-9]{10}" required>
                </div>
                <div class="col-6">
                  <input type="text" class="form-control" placeholder="¿En qué tiempo tienes planeado comprar tu casa?
                  " id="tiempo" name="tiempo" required>
                </div>
              </div>
              <div class="row my-4">
                <div class="col-6">
                  <input type="text" class="form-control" placeholder="¿Qué presupuesto tienes en mente para tu nueva casa?
                  " id="presupuesto" name="presupuesto" required>
                </div>
                <div class="col-6">
                  <input type="text" class="form-control" placeholder="¿En qué zona estás interesado en comprar tu casa?
                  " id="zona" name="zona" required>
                </div>
              </div>
              <div class="row my-4">
                <div class="col">
                  <select name="modelo" id="modelo" class="form-control rounded-0" required>
                    <option disabled selected value>¿Con qué financiamiento planeas comprar tu casa?
                    </option>
                    <option value="Contado">Contado
                    </option>
                    <option value="Infonavit">Infonavit</option>
                    <option value="Fovissste">Fovissste</option>
                    <option value="Bancario">Bancario</option>
                    <option value="Otro">Otro</option>
                  </select>
                </div>
                </div>
                  <input type="hidden" id="utm_source" name="utm_source" class="utms">
                  <input type="hidden" id="utm_medium" name="utm_medium" class="utms">
                  <input type="hidden" id="utm_campaign" name="utm_campaign" class="utms">
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Enviar Mensaje</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section>
</main>
<script>
  // Script to fill UTM parameters in the form fields
  function getURLParameter(name) {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(name) || '';
  }

  function llenarCamposUTM() {
      const utmParams = [
          "utm_source",
          "utm_medium",
          "utm_campaign",
          "utm_term",
          "utm_content"
      ];

      utmParams.forEach(param => {
          const input = document.getElementById(param);
          if (input) {
              input.value = getURLParameter(param);
          }
      });
  }
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm');
  const result = document.getElementById('result');
  // Llenar los campos UTM al cargar la página
  llenarCamposUTM();
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(form);

    fetch('contacto/submitWebhookData', {method: 'POST', body: formData})
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
