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

    <link rel="stylesheet" href="//pizto.com/admin/assets/css/font-awesome.css">
    <link href="//pizto.com/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="//pizto.com/admin/assets/css/mdb.min.css" rel="stylesheet">
    <link href="//pizto.com/admin/assets/css/galeria.css" rel="stylesheet">

    <style>body { overflow-x: hidden; padding-left: 15px; }</style>

</head>
<body class="hidden-sn white-skin">

<main>



<!--Section: Contact v.2-->
<section class="section">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Escribanos, es un gusto saber de usted</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar Informacion</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fa fa-pie-chart  fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fa fa-phone fa-2x"></i>

                    <p>+ 503 7671 0797</p>
                </li>

                <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                    <p>info@hibridosv.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->







</main>  


    <script type="text/javascript" src="//pizto.com/admin/assets/js/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="//pizto.com/admin/assets/js/popper.min.js"></script>

    <script type="text/javascript" src="//pizto.com/admin/assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="//pizto.com/admin/assets/js/mdb.min.js"></script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();

       </script>
</body>

</html>
