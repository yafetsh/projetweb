<?php 

include "../config.php";
$bdd = config::getConnexion();

   if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $get_id = htmlspecialchars($_GET['id']);
    $article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $article->execute(array($get_id));

    if ($article->rowCount() == 1) {
      $article = $article->fetch();
      $titre = $article['titre'];
      $id = $article['id'];
      $contenu = $article['contenu']; }
   }
   else{
    window.location('index.php');
   }

 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:01 GMT -->
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
            <li><a href="#.">Mon compte</a></li>
            <li><a href="#.">Mes favoris</a></li>
          </ul>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="https://www.facebook.com/fashionmakeuptunisia/"><i class="fa fa-facebook"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Logo -->
    <div class="container">
      <div class="logo"> <a href="#."><img src="images/fashionmakeup.PNG" alt=""></a> </div>
    </div>
    
    <!-- Nav -->
    <div class="sticky">
      <div class="container">
        <nav>
          <ul id="ownmenu" class="ownmenu">
            <li class="active"><a href="index.html">HOME</a>
            </li>
            <li><a href="Produit.html">Produits</a> 
              
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
                    <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                    <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                    <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                    <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                    <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                  </ul>
                </div>
                <div class="col-sm-3">
                  <h6>LEVRES</h6>
                  <ul>
                    <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                    <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                    <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                  </ul>
                </div>
                 <div class="col-sm-3">
                  <h6>ONGLES</h6>
                  <ul>
                    <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                  </ul>
                </div>
                <div class="col-sm-3">
                  <h6>ACCESSOIRES</h6>
                </div>
              </div>
            </div>
          </li>
          <li><a href="index.html">PROMOTION</a>
            <!--======= MEGA MENU =========-->
            <div class="megamenu full-width look-book">
              <div class="row nav-post">
                <div class="col-sm-2">
                  <h6>Produits</h6>
                  <ul>
                    <li><a href="#."> MEN’S</a></li>
                    <li><a href="#."> WOMAN</a></li>
                    <li><a href="#."> KID’S</a></li>
                    <li><a href="#."> BAGS & SHOES</a></li>
                    <li><a href="#."> SEASONAL</a></li>
                    <li><a href="#."> LOOKBOOK</a></li>
                    <li><a href="#."> </a></li>
                  </ul>
                </div>
                <div class="col-sm-5">
                  <div class="media">
                    <div class="media-left">
                      <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-1.jpg" alt=""> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                      <a href="#.">READ MORE</a> </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-4.jpg" alt=""> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                      <a href="#.">READ MORE</a> </div>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="media">
                    <div class="media-left">
                      <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-2.jpg" alt=""> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                      <a href="#.">READ MORE</a> </div>
                  </div>
                  <div class="media">
                    <div class="media-left">
                      <div class="nav-img"> <a href="#"> <img class="media-object img-responsive" src="images/nav-img-3.jpg" alt=""> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Oversized T-Shirt Dress</h6>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium </p>
                      <a href="#.">READ MORE</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li><a href="08-01-blog-mansory.html">A PROPOS</a>
          </li>

            <ul class="dropdown">
              <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID </a>
                <ul class="dropdown">
                  <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                  <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                  <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                </ul>
              </li>
              <li><a href="09-01-portfolio-grid.html">PORTFOLIO Default </a>
                <ul class="dropdown">
                  <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                  <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                  <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                </ul>
              </li>
              <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
              <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
              <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
              <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
              <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
            </ul>
            <li><a href="04-contact-01.html">CONTACT</a>
            </li>
            
            <!--======= Shopping Cart =========-->
            <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">2</span>
              <ul class="dropdown">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/item-col-img-1.jpg" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                      <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/item-col-img-2.jpg" alt="..."> </a> </div>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                      <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                  </div>
                </li>
                <li class="no-padding no-border">
                  <h5 class="text-center">SUBTOTAL: 258.00 USD</h5>
                </li>
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
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
                      <option>MEN'S</option>
                      <option>WOMENS</option>
                      <option>KIDS</option>
                      <option>FASHION</option>
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
  <!-- Header End --> 
  <!--======= SUB BANNER =========-->
  <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
    <div class="container">
      <h4>ESPACE CONSEIL</h4>
      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="#">ACCEUIL</a></li>
        <li class="active">ESPACE CONSEIL</li>
      </ol>
    </div>
  </section>
  
  <!-- CONTENT START -->
  <div class="content"> 
    
    <!-- Map -->
    
    <!--======= Contact Us =========-->
    
                <img src="miniatures/<?=$id?>.jpg" /> <br>
  <h1><?= $titre ?></h1>
  <p><?=  $contenu?></p>

    
    <!--======= BOXES =========-->
    <section class="section-p-60px contact-box animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="row"> 
          
     
          
          <!-- TESTIMONIAL -->
          <div class="col-md-4 animate fadeInRight" data-wow-delay="0.4s">
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <!--======= Footer =========-->
<footer>
    <div class="container">
      <div class="text-center"> <a href="#."><img src="images/logo-dark1.png" alt=""></a><br>
        <img class="margin-t-40" src="images/hammer.png" alt="">
        <p class="intro-small margin-t-40">Multipurpose E-Commerce Theme Fashion Makeup Tunisia Manal Amarra .</p>
      </div>
      
      <!--  Footer Links -->
      <div class="footer-link row">
        <div class="col-md-6">
          <ul>
            
            <!--  INFOMATION -->
            <li class="col-sm-6">
              <h5>INFOMATION</h5>
              <ul class="f-links">
                <li><a href="#.">ABOUT US</a></li>
                <li><a href="#."> DELIVERY INFOMATION</a></li>
                <li><a href="#."> PRIVACY & POLICY</a></li>
                <li><a href="#."> TEMRS & CONDITIONS</a></li>
                <li><a href="#."> MANUFACTURES</a></li>
              </ul>
            </li>
            
            <!-- MY ACCOUNT -->
            <li class="col-sm-6">
              <h5>MOM COMPTE</h5>
              <ul class="f-links">
                <li><a href="#.">Profile</a></li>
                <li><a href="#."> Login</a></li>
                <li><a href="#."> Mon Panier</a></li>
                <li><a href="#."> WISHLIST</a></li>
                <li><a href="#."> CHECKOUT</a></li>
              </ul>
            </li>
          </ul>
        </div>
        
        <!-- Second Row -->
        <div class="col-md-6">
          <ul class="row">            
            <!-- FLICKR PHOTO -->
            <li class="col-sm-6">
              <h5>FLICKR PHOTO</h5>
              <ul class="flicker">
                <li><a href="#."><img src="images/flicker-1.jpg" alt=""></a></li>
                <li><a href="#."><img src="images/flicker-2.jpg" alt=""></a></li>
                <li><a href="#."><img src="images/flicker-3.jpg" alt=""></a></li>
                <li><a href="#."><img src="images/flicker-4.jpg" alt=""></a></li>
                <li><a href="#."><img src="images/flicker-5.jpg" alt=""></a></li>
                <li><a href="#."><img src="images/flicker-6.jpg" alt=""></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      
      <!-- Rights -->
      <div class="rights">
        <p> © 2018 HTML5 TEMPLATE FASHION MAKEUP. All Rights Reserved. Powered By ARTVISION</p>
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
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:02 GMT -->
</html>