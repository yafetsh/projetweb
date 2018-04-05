<?php
  include_once "../Entities/livraison.php";
  include_once "../Core/livraisoncore.php";

  if(isset($_POST['rue']) and isset($_POST['numero']) and isset($_POST['region']) and isset($_POST['ville'])){
    $livraison1=new livraison($_POST['rue'],$_POST['numero'],$_POST['region'],$_POST['ville']);
    $livraison1c=new livraisoncore();
    $livraison1c->ajouterlivraison($livraison1);
     header("Location: afficherlivraisons.php");
  }
  else {
    echo "Verifier les champs";
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
                <li>
                  <div class="media">
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/new-item-1.jpg" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">LOOSE-FIT TRENCH COAT</h6>
                      <span class="price">129.00 USD</span> <span class="qty">Quantité: 01</span> </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/new-item-1.jpg" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">LOOSE-FIT TRENCH COAT</h6>
                      <span class="price">129.00 USD</span> <span class="qty">Quantité: 01</span> </div>
                  </div>
                </li>
                <li class="no-padding no-border">
                  <h5 class="text-center">TOTAL: 258.00 USD</h5>
                </li>
                <li class="no-padding no-border">
                  <div class="row">
                    <div class="col-xs-6"> <a href="#." class="btn btn-small">ANNULER</a></div>
                    <div class="col-xs-6 "> <a href="#." class="btn btn-1 btn-small">VALIDER</a></div>
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
<!--======= Livraison =========-->
    <section class="section-p-30px conact-us no-padding-b animate fadeInUp" data-wow-delay="0.4s">
      <!--======= Livraison =========-->
      <div class="container">
              <!-- Tittle -->
        <div class="tittle">
          <h5></h5>
          <p><br>
            </p>
        </div>
     <div class="contact section-p-30px no-padding-b">
          <div class="contact-form">
        <!--======= FORM  =========-->
            <form role="form" id="contact_form" class="contact-form" onSubmit="return false">
              <h4 align="left"><b>Nouveau:</b></h4>
              <p align="left"><strong>Fashion  make up</strong> vous offre la possibilité de gagner votre temps et votre énergie 
              grace à la livraison à domicile,elle vous permet de prendre votre commande à plus vite possible sans aucun effort (de 1 à 3 jours au maximum),
              de plus elle vous offre la possibilité de suivre l'acheminement de votre colis.
              <hr style="height:30px"></hr> 
              <div class="col-md-6" >       
                <h3 ><b>Vérification des données</b></h3>
                <li class="col-sm-12">  
                Merci de confirmer votre adresse ainsi que votre telephone
                <form method="POST" class="form-horizontal form-label-left" novalidate>
                  <br><br><br><label>Adresse:</label>
                  <input id="rue" name="rue" required="required" class="form-control col-md-7 col-xs-12"
                  <br><br><br><label>Telephone:</label>
                  <input name="numero" id="numero" required="required" placeholder="00 000 000" class="form-control col-md-7 col-xs-12" >
                  <br><br><br><label>Region:</label>
                  <select data-default-region-id="" required="required" data-msg-required="Champs requis" class="ft-region-dropdown placeholder" name="region" id="region">
                  <option value="" selected="selected">Sélectionner...</option>
                  <option value="2">Ariana</option>
                  <option value="3">Ben Arous</option>
                  <option value="7">Bizerte</option>
                  <option value="8">Béja</option>
                  <option value="22">Gabes</option>
                  <option value="19">Gafsa</option>
                  <option value="9">Jendouba</option>
                  <option value="12">Kairouan</option>
                  <option value="13">Kasserine</option>
                  <option value="21">Kebili</option>
                  <option value="4">La Manouba</option>
                  <option value="10">Le Kef</option>
                  <option value="17">Mahdia</option>
                  <option value="16">Monastir</option>  
                  <option value="23">Médenine</option>
                  <option value="5">Nabeul</option>
                  <option value="18">Sfax</option>
                  <option value="14">Sidi Bouzid</option>
                  <option value="11">Siliana</option>
                  <option value="15">Sousse</option>
                  <option value="24">Tataouine</option>
                  <option value="20">Tozeur</option>
                  <option value="1">Tunis</option>
                  <option value="6">Zaghouan</option>
                  </select>
                  <br><br><br><label>Ville:</label>
                  <input  required="required" name="ville" id="ville" type="text" aria-required="true">
                  <li class="col-sm-12 no-margin">
                  <p style="text-align: center;">
                  <input type="submit" value="PASSER MA COMMANDE" class="btn" id="btn_submit"></p>
                  </li>
                </form>
                
              </div>
              
        <div class="col-md-6">
        <p>
          <h3 ><b> Questions & réponses</b></h3>
          Vous avez des questions au sujet de la commande, la livraison, le paiement ou autres? La liste des questions les plus fréquemment posées et leurs réponses 
          vous aident.
          <li class="col-sm-12">
            <p><h5>Je ne peux plus accéder à mon compte client. Que puis-je faire?</h5>
            <p>Pour créer un nouveau mot de passe, veuillez cliquer dans l'identifiant «Mon compte» sur «Mot de passe oublié?», avant d'entrer votre adresse e-mail correspondant à votre compte client. 
            Vous recevrez un e-mail en retour avec le lien pour le changement du mot de passe.
            <p><h5>Quel est le délai de livraison?</h5>
            <p>Les produits disponibles en stock sont livrés en règle générale dans un délai de un à trois jours ouvrables .
            <p><h5>Quand s'effectuera le payement ?</h5>
            <p>Le payment se deroulera après recevoir votre commande suivie d'une facture.
            <p><h5>Si je ne suis pas satisfait avec l'article que j'ai commandé, puis-je le retourner?</h5>
            <p>...
            <p><h5>Puis-je annuler ma commande en ligne?</h5>
            Vous aurez la possibilité d'annuler votre commande uniquement dans le cas ou l'effectuation de votre commande n'a pas dépassé 2 heures.
          </li>
          <div><b>N'hésitez pas à nous contacter pour plus d'informations</b></div>
        </div>
</form>
    </section>
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
