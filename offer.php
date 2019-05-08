<?php 
session_start(); 

if($_SESSION["language"] != NULL) {
    include("language/en.php");

} else {
    include("language/es.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $headTitle ?></title>

    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/galeria.css" rel="stylesheet">

    <style>

body { overflow-x: hidden;  }


/* Required for full background image */

html,
body,
header,
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 100vh;
  }
}

.top-nav-collapse {
  background-color: #78909c !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
  .navbar:not(.top-nav-collapse) {
    background: #78909c !important;
  }
}

h1 {
  letter-spacing: 8px;
}

h5 {
  letter-spacing: 3px;
}

.hr-light {
  border-top: 3px solid #fff;
  width: 80px;
}

</style>

</head>
<body class="hidden-sn cyan-skin">


<!-- Main navigation -->
<header>

<!-- Main navigation -->
<header>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="./"><strong>HIBRIDO</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#info">Informaci&oacuten</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#precio">Precios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- Navbar -->
  <!-- Full Page Intro -->
  <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('assets/img/intro.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 mb-4 white-text text-center">
            <h1 class="h1-reponsive white-text text-uppercase font-weight-bold mb-0 pt-md-5 pt-5 wow fadeInDown" data-wow-delay="0.3s"><strong>SOMOS PROFESIONALES EN LA WEB</strong></h1>
            <hr class="hr-light my-4 wow fadeInDown" data-wow-delay="0.4s">
            <h5 class="text-uppercase mb-4 white-text wow fadeInDown" data-wow-delay="0.4s"><strong>Diseño & Programación </strong></h5>
            <a href="#info" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Informaci&oacuten</a>
            <a href="#contacto" class="btn btn-outline-white wow fadeInDown" data-wow-delay="0.4s">Contacto</a>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
</header>
<!-- Main navigation -->


<main>













<!-- Section: Features v.3 -->
<section class="my-1" id="info">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-1">A&uacute no tienes tu p&aacutegina Web?</h2>
  <!-- Section description -->
  <p class="lead grey-text text-center w-responsive mx-auto mb-5">Puedes adquirir tu página web profesional, con las mejores características del mercado al mejor precio con nosotros, con un solo pago o con cuotas muy reducidas.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 text-center text-lg-left">
      <img  class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/screens-section.jpg" alt="Sample image">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fa fa-mail-forward fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Gran integración</h5>
          <p class="grey-text">Adaptada para ser visualizada en cualquier dispositivo, Smart Phone, Tablet o PC, con un entrono muy agradable para sus visitantes, esto genera más y mejores clientes para su negocio.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!-- Grid row -->
      <div class="row mb-3">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fa fa-mail-forward fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Siempre en Contacto</h5>
          <p class="grey-text">Puede comunicarse con nosotros cuando desee, damos seguimiento a nuestros clientes para ofrecer los mejores servicios y que nuestros clientes siempre estén satisfechos con los resultados.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

      <!--Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-1">
          <i class="fa fa-mail-forward fa-lg indigo-text"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-10 col-md-11 col-10">
          <h5 class="font-weight-bold mb-3">Pagos Accesibles</h5>
          <p class="grey-text mb-0">Contamos con los mejores precios del mercado, ofrecemos facilidades de pago para pequeñas y medianas empresas para que sus productos y servicios siempre estén en línea.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!--Grid row-->

    </div>
    <!--Grid column-->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.3 -->


















<!-- Section: Pricing v.6 -->
<section class="my-5" id="precio">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Los mejores Precios. Compruébelo!</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto mb-5">Somos una empresa con alta demanda y muy competitivos, en nuestro precio incluye alojamiento del sitio Web (Web Hosting), nombre de la página (Dominio) y diseño con un solo pago anual o en pequeñas cuotas mensuales. Nadie puede igualar nuestros precios ya que en otras empresas solo el precio del Hosting es más elevado que toda nuestra oferta. <br>Puede comprobar precios de hosting y dominios por separado en los sitios mas comunes
<a href="https://hosterbox.com/shared-hosting.php">HosterBox</a>, <a href="https://es.godaddy.com/hosting/web-hosting?isc=goflla30">GoDaddy</a> o <a href="https://www.hostgator.com/web-hosting">Hostgator</a>. Estos precios no incluyen nombre de dominio ni diseño Web</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

      <!-- Pricing card -->
      <div class="card pricing-card white-text">

        <!-- Price -->
        <div class="aqua-gradient rounded-top">
          <h4 class="option">BASICO</h4>
        </div>

        <!-- Features -->
        <div class="card-body striped green-striped card-background px-5">

          <h2 class="my-4 pb-3 h1">$ 34.95 </h2>
          <ul>
            <li>
              <p><strong>1 </strong> Diseno Web</p>
            </li>
            <li>
              <p><strong>10 </strong> GB Ancho de Banda</p>
            </li>
            <li>
              <p><strong>1 </strong> Actualizacion</p>
            </li>
            <li>
              <p><strong>2 </strong> Cuentas de Email</p>
            </li>
            <li>
              <p>Soporte Permanente</p>
            </li>
          </ul>
          <!-- <button class="mb-3 mt-3 btn aqua-gradient btn-rounded">Buy now</button> -->
          Sitio Web Básico con la información de su negocio o empresa, enlaces a redes sociales y formulario de contacto
      </div>
        <!-- Features -->

      </div>

      <!-- Pricing card -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

      <!-- Pricing card -->
      <div class="card pricing-card white-text">

        <!-- Price -->
        <div class="peach-gradient rounded-top">
          <h4 class="option">PROFESIONAL</h4>
        </div>

        <!-- Features -->
        <div class="card-body striped orange-striped card-background px-5">

          <h2 class="my-4 pb-3 h1">$ 99.95 </h2>
          <ul>
            <li>
              <p><strong>1 </strong> Diseno Web</p>
            </li>
            <li>
              <p><strong>100 </strong> GB Ancho de Banda</p>
            </li>
            <li>
              <p><strong>3 </strong> Actualizaciones</p>
            </li>
            <li>
              <p><strong>5 </strong> Cuentas de Email</p>
            </li>
            <li>
              <p>Soporte Permanente</p>
            </li>
          </ul>
          <!-- <button class="mb-3 mt-3 btn peach-gradient btn-rounded">Buy now</button> -->
          Sitio Web Básico con la información de su negocio o empresa, enlaces a redes sociales, formulario de contacto, galerías de imágenes, servicios y un diseño agradable 
        </div>
        <!-- Features -->

      </div>
      <!-- Pricing card -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6">

      <!-- Pricing card -->
      <div class="card pricing-card white-text">

        <!-- Price -->
        <div class="purple-gradient rounded-top">
          <h4 class="option">EMPRESARIAL</h4>
        </div>

        <!-- Features -->
        <div class="card-body striped purple-striped card-background px-5">

          <h2 class="my-4 pb-3 h1">$ 249.95 </h2>
          <ul>
            <li>
              <p><strong>1 </strong> Diseno Web</p>
            </li>
            <li>
              <p><strong>500 </strong> GB Ancho de Banda</p>
            </li>
            <li>
              <p><strong>6 </strong> Actualizaciones</p>
            </li>
            <li>
              <p><strong>15 </strong> Cuentas de Email</p>
            </li>
            <li>
              <p>Soporte Permanente</p>
            </li>
          </ul>
          <!-- <button class="mb-3 mt-3 btn purple-gradient btn-rounded">Buy now</button> -->
          Sitio Web Dinámico con la información de su negocio o empresa, con interfaz para pueda interactuar con sus visitantes ya sea por chat, blog u otro tipo de herramienta que desee
        </div>
        <!-- Features -->

      </div>
      <!-- Pricing card -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Pricing v.6 -->























<h2 class="h1-responsive font-weight-bold text-center" id="contacto">P&oacutengase en contacto</h2>
<p class="text-center w-responsive mx-auto">Si desea más información acerca de nuestros productos o servicios póngase en contacto con nosotros, siempre es un gusto saber de usted. </p>

<!-- Section: Contact v.3 -->
<section class="contact-section my-5">
<div id="result"></div>
  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row">




   

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">
<form class="text-center border border-light p-3" id="form-contacto" name="form-contacto">

          <!-- Header -->
          <h3 class="mt-4"><i class="fa fa-envelope-o pr-2"></i>Escr&iacutebanos:</h3>

          <!-- Grid row -->
          <div class="row">


            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="nombre"  name="nombre" class="form-control">
                <label for="nombre" class="">* Nombre</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email" class="">* Email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="telefono" name="telefono" class="form-control">
                <label for="telefono" class="">Telefono</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="empresa" name="empresa" class="form-control">
                <label for="empresa" class="">Empresa</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea id="mensaje" name="mensaje" class="form-control md-textarea" rows="3"></textarea>
                <label for="mensaje">* Mensaje</label>
                
                <button type=submit class="btn-floating btn-lg blue" id="btn-contacto" name="btn-contacto"> <i class="fa fa-paper-plane-o "></i></button>
                
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->
</form>
        </div>

      </div>
      <!-- Grid column -->






      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Informaci&oacuten de contacto</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fa fa-map-marker  pr-2"></i>Urb La Mascota Cl 2 No 231 
Col San Benito San Salvador 
El Salvador</p>
            </li>
            <li>
              <p><i class="fa fa-phone pr-2"></i>WhatsApp: +503 7671 0797</p>
            </li>
            <li>
              <p><i class="fa fa-envelope pr-2"></i>Email: info@hibridosv.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fa fa-facebook-official"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fa fa-instagram"> </i>
              </a>
            </li>

          </ul>
          <hr class="hr-light my-4">
          <a href="./" class="btn btn-indigo"><i class="fa fa-arrow-left mr-1"></i> REGRESAR</a>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->









</main>  


    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="assets/js/popper.min.js"></script>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();

       </script>
       <script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>
