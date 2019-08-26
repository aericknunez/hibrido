<?php 
session_start(); 

if($_SESSION["language"] != NULL) {
    include("language/en.php");

} else {
    include("language/es.php");
}


include("body/header.php"); ?>
    <main>
<?php include("body/main.php"); ?>
<?php include("body/sistemas.php"); ?>
<?php include("body/web.php"); ?>
<?php include("body/movil.php"); ?>
<?php include("body/contacto.php"); ?>

    </main>
<?php include("body/footer.php"); ?>
    <script src="vendor/jquery.min.js"></script>
    <script src="vendor/jquery.easing.min.js"></script>
    <script src="vendor/typeit.min.js"></script>
    <script src="vendor/viewport-checker.min.js"></script>
    <script src="vendor/segment.min.js"></script>
    <script src="vendor/charming.min.js"></script>
    <script src="vendor/anime.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADLZnzj_ccZeWtr735_FB2dLXFF3B0Xcw"></script>
    <script src="js/main.js"></script>
  </body>
</html>