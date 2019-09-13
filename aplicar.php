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

 </header>
<!-- Main navigation -->


<main>



<div id="contenido" class="content col-md-10 text-center">
  









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
