<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?= $this->renderSection('metadata') ?>
  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top p-2">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="./" class="d-flex align-items-center">
        <img src="assets/img/logo.png" style="width:300px !important" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="./" class="active">Inicio</a></li>
          <li><a href="quienes-somos">¿Quiénes somos?</a></li>
          <li><a href="servicios-quieres-rentar">Servicios GLM</a></li>
          <li class="dropdown">
            <a href="#">Desarrollos <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="desarrollo-san-antonio-pachuquilla">San Antonio Pachuquilla</a></li>
              <li><a href="desarrollo-valle-del-alamo">Valle del Alamo</a></li>
              <li><a href="desarrollo-las-peras">Las Peras</a></li>
              <li><a href="desarrollo-privada-la-palma">Privada la palma</a></li>
              <li><a href="desarrollo-paseo-de-las-reynas">Paseo de las Reynas</a></li>
            </ul>
          </li>
          <li><a href="proximos-proyectos">Próximos proyectos</a></li>
          <li><a href="contacto">Contáctanos</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

<?= $this->renderSection('content') ?>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Dirección</h4>
            <p>Av Reyna de los Venturosos 1003</p>
            <p>Privada de las Reynas V, 42184 Paseo de las Reynas, Hgo.</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contáctanos</h4>
            <p>
              <strong>Teléfono:</strong> <span><?= $site_phone ?? '1234567890'?></span><br>
              <strong>Email:</strong> <span><?= $site_email ?? 'info@glm.com' ?></span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horario</h4>
            <p>
              <strong>L-V:</strong> <span>9AM - 6PM</span><br>
              <strong>SÁBADO:</strong> <span>9AM - 3PM</span><br>
              <strong>DOMINGO:</strong> <span>11AM - 3PM</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Síguenos</h4>
          <div class="social-links d-flex">
            <a href="<?= $site_facebook ?? 'GLM' ?>" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?= $site_instagram ?? 'GLM' ?>" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="<?= $site_x ?? 'GLM' ?>" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>©  <strong class="px-1 sitename"><?= $site_name ?? 'GLM' ?></strong> <span>Todos los derechos reservados</span></p>
       
    </div>
    <div class="position-fixed bg-transparent wa-cont">
        <a href="#" onclick="openWhatsApp()" class="d-flex align-items-center justify-content-center rounded-circle shadow wa-btn" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="whatsapp-tooltip" data-bs-title="Hola 👋 ¿En qué podemos ayudarte?">
          <svg height="35" style="isolation:isolate" viewBox="0 0 800 800" width="50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
               <clipPath id="_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ">
                  <rect height="800" width="800"></rect>
               </clipPath>
            </defs>
            <g clip-path="url(#_clipPath_A3g8G5hPEGG2L0B6hFCxamU4cc8rfqzQ)">
               <g>
                  <path d=" M 787.59 800 L 12.41 800 C 5.556 800 0 793.332 0 785.108 L 0 14.892 C 0 6.667 5.556 0 12.41 0 L 787.59 0 C 794.444 0 800 6.667 800 14.892 L 800 785.108 C 800 793.332 794.444 800 787.59 800 Z " fill="rgb(37,211,102)"></path>
               </g>
               <g>
                  <path d=" M 508.558 450.429 C 502.67 447.483 473.723 433.24 468.325 431.273 C 462.929 429.308 459.003 428.328 455.078 434.22 C 451.153 440.114 439.869 453.377 436.434 457.307 C 433 461.236 429.565 461.729 423.677 458.78 C 417.79 455.834 398.818 449.617 376.328 429.556 C 358.825 413.943 347.008 394.663 343.574 388.768 C 340.139 382.873 343.207 379.687 346.155 376.752 C 348.804 374.113 352.044 369.874 354.987 366.436 C 357.931 362.999 358.912 360.541 360.875 356.614 C 362.837 352.683 361.857 349.246 360.383 346.299 C 358.912 343.352 347.136 314.369 342.231 302.579 C 337.451 291.099 332.597 292.654 328.983 292.472 C 325.552 292.301 321.622 292.265 317.698 292.265 C 313.773 292.265 307.394 293.739 301.996 299.632 C 296.6 305.527 281.389 319.772 281.389 348.752 C 281.389 377.735 302.487 405.731 305.431 409.661 C 308.376 413.592 346.949 473.062 406.015 498.566 C 420.062 504.634 431.03 508.256 439.581 510.969 C 453.685 515.451 466.521 514.818 476.666 513.302 C 487.978 511.613 511.502 499.06 516.409 485.307 C 521.315 471.55 521.315 459.762 519.842 457.307 C 518.371 454.851 514.446 453.377 508.558 450.429 Z  M 401.126 597.117 L 401.047 597.117 C 365.902 597.104 331.431 587.661 301.36 569.817 L 294.208 565.572 L 220.08 585.017 L 239.866 512.743 L 235.21 505.332 C 215.604 474.149 205.248 438.108 205.264 401.1 C 205.307 293.113 293.17 205.257 401.204 205.257 C 453.518 205.275 502.693 225.674 539.673 262.696 C 576.651 299.716 597.004 348.925 596.983 401.258 C 596.939 509.254 509.078 597.117 401.126 597.117 Z  M 567.816 234.565 C 523.327 190.024 464.161 165.484 401.124 165.458 C 271.24 165.458 165.529 271.161 165.477 401.085 C 165.46 442.617 176.311 483.154 196.932 518.892 L 163.502 641 L 288.421 608.232 C 322.839 627.005 361.591 636.901 401.03 636.913 L 401.126 636.913 L 401.127 636.913 C 530.998 636.913 636.717 531.2 636.77 401.274 C 636.794 338.309 612.306 279.105 567.816 234.565" fill="rgb(255,255,255)" fill-rule="evenodd"></path>
               </g>
            </g>
         </svg>
          </a>
        </div>
  </footer>

  <!-- Scroll Top -->
  <!-- <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script> 
  function openWhatsApp() {
    const phone = '521<?= str_replace('-', '', $site_whatsapp ?? '') ?>';
    const message = encodeURIComponent('Hola quiero más información');

    const isMobile = /iPhone|Android|iPad|iPod/i.test(navigator.userAgent);
    const url = isMobile
      ? `https://wa.me/${phone}?text=${message}`
      : `https://web.whatsapp.com/send?phone=${phone}&text=${message}`;

    window.open(url, '_blank');
  }
  document.addEventListener('DOMContentLoaded', function() {
  // tooltip
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  });
  </script>
</body>

</html>