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

    <link rel="stylesheet" href="https://pizto.com/assets/css/font-awesome.css">
    <link href="https://pizto.com/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://pizto.com/assets/css/mdb.min.css" rel="stylesheet">
    <link href="https://pizto.com/assets/css/galeria.css" rel="stylesheet">

    <style>body { overflow-x: hidden; padding-left: 15px; }</style>

</head>
<body class="hidden-sn white-skin">

<main>
<h1>Hola Mundo</h1>
</main>  


    <script type="text/javascript" src="https://pizto.com/assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="https://pizto.com/assets/js/popper.min.js"></script>

    <script type="text/javascript" src="https://pizto.com/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://pizto.com/assets/js/mdb.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();

       </script>
</body>

</html>
