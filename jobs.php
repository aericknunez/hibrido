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

    <link rel="stylesheet" href="https://pizto.com/admin/assets/css/font-awesome.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/galeria.css" rel="stylesheet">

    <style>

.navbar {
  background: linear-gradient(40deg, rgba(0,51,199,.3), rgba(209,149,249,.3));
}
.navbar:not(.top-nav-collapse) {
  background: transparent;
}
.navbar .navbar-brand img {
  height: 40px;
  margin: 10px;
}

.heading {
  margin: 0 6rem;
  font-weight: 700;
  color: #5d4267;
}
.subheading {
  margin: 2.5rem 6rem;
  color: #bcb2c0;
}
.btn.btn-margin {
  margin-left: 6rem;
  margin-top: 3rem;
}

.title {
  margin-top: 6rem;
  margin-bottom: 2rem;
  color: #5d4267;
}
.subtitle {
  color: #bcb2c0;
  margin-left: 20%;
  margin-right: 20%;
  margin-bottom: 6rem;
}
</style>

</head>
<body>


<!-- Main navigation -->
<header>

  <!--Navbar -->
  <nav class="navbar navbar-expand-lg scrolling-navbar navbar-dark z-depth-0 fixed-top">
    <a class="navbar-brand" href="/">
      <img src="https://hibridosv.com/img/logo.png" alt="mdb logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
      aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
  <!--/.Navbar -->

  <!-- Intro -->
  <section class="view">

    <div class="row">

      <div class="col-md-6">

        <div class="d-flex flex-column justify-content-center align-items-center h-100">
          <h1 class="heading display-3">Oportunidad de Empleo</h1>
          <h4 class="subheading font-weight-bold">Seleccione la plaza que mas le corresponde</h4>
        </div>

      </div>

      <div class="col-md-6">

        <div class="view">
          <img src="img/empleo.jpg" class="img-fluid" alt="smaple image">
          <div class="mask flex-center hm-gradient">
          </div>
        </div>

      </div>

    </div>

  </section>
  <!-- Intro -->

</header>
<!-- Main navigation -->


<main>



<div id="contenido" class="content col-md-10 text-center">
  


<!-- Section heading -->
<h2 class="h1-responsive font-weight-bold my-5">Plazas disponibles actualmente</h2>
<!-- Section description -->
<p class="grey-text w-responsive mx-auto mb-5">Para aplicar a una de nuestras plazas por favor seleccione la correcta y llene la solicitud</p>

<!-- Grid row -->
<div class="row d-flex justify-content-center">

  <!-- Grid column -->
  <div class="col-md-6 col-xl-5 mb-4">
    <!--Featured image-->
    <div class="view overlay rounded z-depth-2">
      <img src="img/vendedor.jpg" class="img-fluid" alt="Sample project image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Excerpt-->
    <div class="card-body">
      <a class="green-text">
        <h5 class="font-weight-bold mt-2 mb-3"></i>Vendedor independiente </h5>
      </a>
      <h4 class="font-weight-bold mb-3">Descripción</h4>
      <p>Deberá visitar una cartera de clientes establecida o nueva para ofrecer los diferentes servicios que brinda la empresa </p>
      <a href="aplicar?tecnico" class="btn btn-success btn-rounded btn-md"> Aplicar</a>
    </div>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-md-6 col-xl-5 mb-4">
    <!--Featured image-->
    <div class="view overlay rounded z-depth-2">
      <img src="img/tecnico.jpg" class="img-fluid" alt="Sample project image">
      <a>
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>
    <!--Excerpt-->
    <div class="card-body">
      <a class="blue-text">
        <h5 class="font-weight-bold mt-2 mb-3">Técnico en sistemas informáticos </h5>
      </a>
      <h4 class="font-weight-bold mb-3">Descripción</h4>
      <p>Instalar y mantener software, con sólidos conocimientos en Microsoft Windows, bases de datos y Git.</p>
      <a href="aplicar?ventas" class="btn btn-success btn-rounded btn-md"> Aplicar</a>
    </div>
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->




</div>
<!-- Grid row -->








</div>








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
