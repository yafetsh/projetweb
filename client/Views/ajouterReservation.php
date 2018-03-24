<?php

    require 'config.php';

    if ( !empty($_POST)) {
        // keep track validation errors
        $nomError = null;
        $prenomError = null;
        $telephoneError = null;
        $typeError = null;
        $dateError = null;

        // keep track post values
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $telephone = $_POST['telephone'];
        $type = $_POST['type'];
        $date = $_POST['date'];

        // validate input
        $valid = true;
        if (empty($nom)) {
            $nomError = '*Please enter Name';
            $valid = false;
        }
        if (empty($prenom)) {
            $nomError = '*Please enter Surname';
            $valid = false;
        }
        if (empty($telephone)) {
            $telephoneError = '*Please enter Phone number';
            $valid = false;
        }
        if (empty($date)) {
            $dateError = '*Please enter Date';
            $valid = false;
        }


        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO reservation (nom,prenom,telephone,type,date) values(?, ?, ?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nom,$prenom,$telephone,$type,$date));
            Database::disconnect();
            header("Location: reservation.php");
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/02-shop-sidebar-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:06 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SEBIAN - Multi Purpose eCommerce HTML5 Template</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,SEBIAN Multi Purpose Care,eCommerce,SEBIAN - Multi Purpose eCommerce HTML5 Template">
<meta name="description" content="SEBIAN - Multi Purpose eCommerce HTML5 Template">
<meta name="author" content="M_Adnan">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- ADD YOUR OWN STYLING HERE. AVOID TO USE STYLE.CSS AND MAIN.CSS. IT WILL BE HELPFUL FOR YOU IN FUTURE UPDATES -->
<link href="css/custom.css" rel="stylesheet" type="text/css">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- JavaScripts -->
<script src="js/modernizr.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- LOADER ===========================================-->
<div id="loader">
  <div class="loader">
    <div class="position-center-center"> <img src="images/logo-dark.png" alt="">

      <p class="font-playfair text-center">Please Wait...</p>
      <div class="loading">
        <div class="ball"></div>
        <div class="ball"></div>
        <div class="ball"></div>
      </div>
    </div>
  </div>
</div>

<!-- Page Wrap -->
<div id="wrap">

  <!-- Header -->
  <header class="header-style-2">
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <!-- Language -->
        <div class="top-links">
          <ul>
            <li><a href="#.">MY ACCOUNT</a></li>
            <li><a href="#.">MY WISHLIST</a></li>

          </ul>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="https://www.facebook.com/fashionmakeuptunisia/"><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="dribbble"><a href="https://www.instagram.com/fashion_makeup_tunisie/"><i class="fa fa-instagram"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Logo -->
    <div class="container">
      <div class="logo"> <a href="#."><img src="images/logo-dark.png" alt=""></a> </div>
    </div>

    <!-- Nav -->
    <div class="sticky">
      <div class="container">
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li class="active"><a href="index.html">HOME</a>
            <ul class="dropdown">
            </ul>
          </li>
          <li><a href="12-contact.html"></a>
          <li><a href="02-shop-sidebar-right.html">PRODUITS</a>
            <!--======= MEGA MENU =========-->
            <div class="megamenu full-width">
              <div class="row nav-post">
                <div class="col-sm-3">
                  <h6>VISAGE</h6>
                  <ul>
                    <li><a href="02-shop-sidebar-right.html">categorie 1</a></li>
                    <li><a href="02-shop-sidebar-left.html">categorie 2</a></li>
                    <li><a href="02-shop-sidebar.html">categorie 3</a></li>
                    <li><a href="02-shop-list-view.html">categorie 4</a></li>
                    <li><a href="02-shop-full_width-03.html">categorie 5</a></li>
                  </ul>
                </div>
                <div class="col-sm-3">
                  <h6>YEUX</h6>
                  <ul>
                    <li><a href="08-01-blog-mansory.html">categorie 1</a></li>
                    <li><a href="08-02-blog-left-side-bar.html">categorie 2</a></li>
                    <li><a href="08-02-blog-right-side-bar.html">categorie 3</a></li>
                    <li><a href="08-04-blog-medium-image.html">categorie 4</a></li>
                    <li><a href="08-05-blog-large-images.html">categorie 5</a></li>
                  </ul>
                </div>
                <div class="col-sm-3">
                  <h6>LEVRES</h6>
                  <ul>
                    <li><a href="09-01-portfolio-grid.html">categorie 1</a></li>
                    <li><a href="09-02-portfolio-grid.html">categorie 2</a></li>
                    <li><a href="09-03-portfolio-grid.html">categorie 4</a></li>
                  </ul>
                </div>
                 <div class="col-sm-3">
                  <h6>ONGLES</h6>
                  <ul>
                    <li><a href="09-01-portfolio-grid.html">categorie 1</a></li>
                  </ul>
                </div>
                <div class="col-sm-3">
                  <h6>ACCESSOIRES</h6>

            </div>
          </li>
          <li><a href="index.html">PROMOTION</a>
		  <li><a href="08-01-blog-mansory.html">A PROPOS</a>
          <li><a href="04-contact-01.html">CONTACT</a>

            <!--======= Shopping Cart =========-->
            <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
              <ul class="dropdown">

                <li class="no-padding no-border">
                  <div class="row">
                    <div class="col-xs-6"> <a href="#." class="btn btn-small">VIEW CART</a></div>
                    <div class="col-xs-6 "> <a href="#." class="btn btn-1 btn-small">CHECK OUT</a></div>
                  </div>
                </li>
              </ul>
            </li>
            <!--======= SEARCH ICON =========-->
            <li class="search-nav"><a href="#."><i class="fa fa-search"></i></a>
              <ul class="dropdown">
                <li class="row">
                  <div class="col-sm-4 no-padding">
                    <select class="selectpicker">
                      <option>VISAGE</option>
                      <option>YEUX</option>
                      <option>LEVRES</option>
                      <option>ONGLES</option>
                      <option>ACCESSOIRES</option>

                    </select>
                  </div>
                  <div class="col-sm-8 no-padding">
                    <input type="search" class="form-control" placeholder="Search Here">
                    <button type="submit"> <i class="fa fa-search"></i> </button>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
<!--======= Réclamation =========-->
    <section class="section-p-30px conact-us no-padding-b animate fadeInUp" data-wow-delay="0.4s">
      <!--======= Réclamation =========-->
      <div class="container">
              <!-- Tittle -->
        <div class="tittle">
          <h5>Réservez vous</h5>
          <p>Laissez-vous maquiller par des mains expertes !  <br></p>
        </div>
		 <div class="contact section-p-30px no-padding-b">
          <div class="contact-form">
		    <!--======= FORM  =========-->
            <form role="form" id="contact_form" class="contact-form" method="POST" action="reservation.php">
                <div class="row">
                  <div class="col-md-6">
                    <ul class="row">
                      <li class="col-sm-12">
                        <label> Nom:*
                          <input type="text" class="form-control" name="nom" value="<?php echo !empty($nom)?$nom:'';?>">
                          <?php if (!empty($nomError)): ?>
                              <span class="help-inline"><?php echo $nomError;?></span>
                          <?php endif; ?>
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label> Prénom:*
                          <input type="text" class="form-control" name="prenom" value="<?php echo !empty($prenom)?$prenom:'';?>" >
                          <?php if (!empty($prenomError)): ?>
                              <span class="help-inline"><?php echo $prenomError;?></span>
                          <?php endif; ?>
                        </label>
                      </li>
                      <li class="col-sm-12">
                        <label> Numéro téléphone:*
                          <input type="text" class="form-control" name="telephone" value="<?php echo !empty($telephone)?$telephone:'';?>">
                          <?php if (!empty($telephoneError)): ?>
                              <span class="help-inline"><?php echo $telephoneError;?></span>
                          <?php endif; ?>
                        </label>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="row">
                      <li class="col-sm-12">
                        <label>
                    Type de maquillage:*
                    <select  class="form-control" name="type"   >
                    <option value="Maquillage de jour">Maquillage de jour</option>
                    <option value="Maquillage de soirée">Maquillage de soirée</option>
                    <option value="Maquillage de mariage">Maquillage de mariage</option></select></label>  </li>


                      <li class="col-sm-12">
                        <label>Date et l'heure:*
                          <input type="datetime-local" class="form-control" name="date" value="<?php echo !empty($date)?$date:'';?>" >
                          <?php if (!empty($dateError)): ?>
                              <span class="help-inline"><?php echo $dateError;?></span>
                          <?php endif; ?>


                        </label>
  </li>

                      <li class="col-sm-12 no-margin">
                        <input type="submit" value="Réservez vous" name="ajouter" class="btn" id="btn_submit"></button> <p>
                      </li>
                    </ul>
                  </div>
                </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    <br>

      <!--  Footer Links -->
<footer>
    <div class="container">
      <div class="text-center"> <a href="#."><img src="images/logo-dark1.png" alt=""></a><br>
        <img class="margin-t-40" src="images/hammer.png" alt="">
        <p class="intro-small margin-t-40">Fashion MAKE-UP</p>
      </div>

      <!--  Footer Links -->
      <div class="footer-link row">
        <div class="col-md-6">
          <ul>

            <!--  INFOMATION -->
            <li class="col-sm-6">
              <h5>INFORMATIONS</h5>
              <ul class="f-links">
                <li><a href="#.">A PROPOS</a></li>
                <li><a href="#.">CONTACT</a></li>
              </ul>
            </li>

            <!-- MY ACCOUNT -->
            <li class="col-sm-6">
              <h5>MON COMPTE</h5>
              <ul class="f-links">
                <li><a href="#.">MON COMPTE</a></li>
                <li><a href="#.">SE CONNECTER</a></li>
                <li><a href="#.">MA CARTE</a></li>
                <li><a href="#.">MES FAVORIS</a></li>
                <li><a href="#.">PAIEMENT</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- Second Row -->
        <div class="col-md-6">
          <ul class="row">


                    </div>

                    </div>


      <!-- Rights -->
      <div class="rights">
        <p>© 2017 HTML5 TEMPLATE ARTVISION. All Rights Reserved!</p>
      </div>
    </div>
  </footer>
  <!-- GO TO TOP -->
  	<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
  <!-- GO TO TOP End -->
</div>
<!-- Wrap End -->
<script src="js/jquery-1.11.3.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/own-menu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>


<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/main.js"></script>
<!-- begin map script-->
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
<script type="text/javascript">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/02-shop-sidebar-right.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:10 GMT -->
</html>
