<!doctype html>
<html lang="en">
  <!-- Mirrored from belichberg.com/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Feb 2018 05:42:46 GMT -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $headTitle ?></title>
    <link rel="SHORTCUT ICON" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="nonScroll">
    <div class="preloader">
      <ul class="preloader-progressbar" aria-busy="true" aria-label="Loading domino shop">
        <li role="presentation"></li>
        <li role="presentation"></li>
        <li role="presentation"></li>
        <li role="presentation"></li>
        <li role="presentation"></li>
        <li role="presentation"></li>
        <li role="presentation"></li>
      </ul>
    </div>
    <header id="page_header" class="page-header">
      <div class="container">
        <div class="header-wrapper">
          <div class="left">
            <div class="lang">
              <div class="lang-wrapper">
                <?php 
                      if($_SESSION["language"] == "2"){
                        echo '<a class="eng active" href="language/change.php?op=1">
                              <img src="img/es2.png" alt="">
                              </a>';
                        echo '<a class="de">
                               <img src="img/en1.png" alt=""> 
                              </a>';
                      } else {
                        echo '<a class="eng active" href="language/change.php?op=2">
                              <img src="img/en2.png" alt="">
                              </a>';
                        echo '<a class="de">
                               <img src="img/es1.png" alt=""> 
                              </a>';

                      }
                 ?>
              </div>
            </div>
            <div class="logo">
              <img src="img/logo.png" alt="">
            </div>
          </div>
          <div class="right">
            <nav id="menu" class="menu">
              <ul id="menu-list" class="menu-list">
                <li class="active-bar"></li>
                <li><a href="#anchor-DataScience"><?php echo $HeadMenu1; ?></a></li>
                <li><a href="#anchor-WebDevelopment"><?php echo $HeadMenu2; ?></a></li>
                <li><a href="#anchor-MobileDevelopment"><?php echo $HeadMenu3; ?></a></li>
                <li><a href="#anchor-Contacts"><?php echo $HeadMenu4; ?></a></li>
              </ul>
              <div class="hamburger hamburger--spin js-hamburger">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>