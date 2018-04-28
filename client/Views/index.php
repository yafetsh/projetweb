<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:39:58 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fashion Makeup</title>
<meta name="keywords" content="Fashion Makeup tunisia , makeup ,makeup tunisia ">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



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
    <div class="position-center-center"> <img src="images/fashionmakeup.png" alt="">
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
  <header class="header">
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">


        <div class="top-links">
          <ul>
            <li><a href="#.">
            	<?php echo $_SESSION['email'] ?>

            </a></li>
            <li><a href="logout.<?php  ?>">SE DÉCONNECTER</a></li>
          </ul>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Logo -->
    <div class="container">
      <div class="logo"> <a href="index.html"><img src="images/logo-dark1.png" alt=""></a> </div>
      </div>


      <div class="sticky">
      <div class="container">
      <!-- Nav -->
      <nav>
        <ul id="ownmenu" class="ownmenu">
          <li class="active"><a href="index.html">HOME</a>
            <ul class="dropdown">
            </ul>
          </li>
          <li><a href="12-contact.html"></a>
          <li><a href="Produit.html">PRODUITS</a>
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
                  <h6>Shop</h6>
                  <ul>
                    <li><a href="#."> MEN?S</a></li>
                    <li><a href="#."> WOMAN</a></li>
                    <li><a href="#."> KID?S</a></li>
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
            <ul class="dropdown">
              <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
            </ul>
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
            <ul class="dropdown">
              <li><a href="04-contact-01.html">Contact US 01</a></li>
              <li><a href="04-contact-02.html">Contact US 02</a></li>
              <li><a href="04-contact-03.html">Contact US 03</a></li>
            </ul>
          </li>

          <!--======= Shopping Cart =========-->
          <li class="shop-cart"><a href="#."><i class="fa fa-shopping-cart"></i></a> <span class="numb">1</span>
            <ul class="dropdown">
              <li>
                <div class="media">
                  <div class="media-left">
                    <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/item-col-img-1.jpg" alt="..."> </a> </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                    <span class="price">129.00 USD</span> <span class="qty">QTY: 02</span> </div>
                </div>
              </li>
              <!--<li>
                <div class="media">
                  <div class="media-left">
                    <div class="cart-img"> <a href="#"> <img class="media-object img-responsive" src="images/item-col-img-2.jpg" alt="..."> </a> </div>
                  </div>
                  <div class="media-body">
                    <h6 class="media-heading">DRAEY TRENCH COAT</h6>
                    <span class="price">129.00 USD</span> <span class="qty">QTY: 01</span> </div>
                </div>
              </li>-->
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
                    <option>yeux</option>
                    <option>visage</option>
                    <option>makeup</option>
                    <option>new</option>
                    <option>trending</option>
                    <option>op5</option>
                    <option>Kop6</option>
                    <option>op7</option>
                    <option>op8</option>
                   
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

  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider">
    <div class="tp-banner-container">
      <div class="tp-banner" >
        <ul>

          <!-- Slider 1 -->
          <li data-transition="fade" data-slotamount="7"> <img src="images/slides/slide-1.jpg" data-bgposition="center top" alt="" />
            <div class="overlay"></div>
            <!-- Layer -->
            <div class="tp-caption sft tp-resizeme rs-parallaxlevel-5"
                  data-x="center"
                  data-y="235"
                  data-speed="700"
                  data-start="1700"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"> <img src="images/logo-deer.png" alt="" /> </div>

            <!-- Layer -->
            <div class="tp-caption sft font-montserrat tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="330"
                  data-speed="700"
                  data-start="2700"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 36px; text-transform: uppercase;"> Manel Amarra </div>

            <!-- Layer -->
            <div class="tp-caption customin font-playfair tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="360"
                  data-speed="720"
                  data-start="3200"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; text-transform: uppercase; font-size: 130px; font-style:italic;"> UP to 50% </div>

            <!-- Layer -->
            <div class="tp-caption sfb  font-playfair text-center tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="540"
                  data-speed="1500"
                  data-start="3200"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 16px; text-transform: uppercase;"> text text text text </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="570"
                  data-speed="700"
                  data-start="4000"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"> <a href="#." class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="#" class="btn btn-1">Discover</a> </div>
          </li>

          <!-- Slider 2 -->
          <li data-transition="random" data-slotamount="7"> <img src="images/slides/slide-2.jpg" data-bgposition="center center" alt="" />
            <div class="overlay"></div>

            <!-- Layer -->
            <div class="tp-caption sft font-montserrat  tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="285"
                  data-speed="700"
                  data-start="1000"
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 120px; text-transform: uppercase; font-weight: bold;"> PROMO </div>

            <!-- Layer -->
            <div class="tp-caption sft tp-resizeme font-montserrat rs-parallaxlevel-4"
                  data-x="center"
                  data-y="450"
                  data-speed="700"
                  data-start="1700"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 18px; text-transform: uppercase; font-weight: bold;  letter-spacing:3px;"> text text text text </div>

            <!-- Layer -->
            <div class="tp-caption sft tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="500"
                  data-speed="700"
                  data-start="2400"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"> <a href="#." class="btn btn-1">SHOPPING NOW</a> </div>
          </li>

          <!-- Slider 3 -->
          <li data-transition="random" data-slotamount="7"> <img src="images/slides/amarra.jpg" data-bgposition="center center" alt="" />
            <div class="overlay"></div>

            <!-- SLIDER LAYERS -->
            <div class="tp-caption white-line-box sft tp-resizeme rs-parallaxlevel-4"
                  data-x="center" data-y="332"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-speed="700"
                  data-start="1000"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"

                  style="z-index: 10;"> </div>

            <!-- Layer -->
            <div class="tp-caption white-line-box sfb tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="420"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-speed="700"
                  data-start="1000"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="z-index: 10;"> </div>

            <!-- Layer -->
            <div class="tp-caption font-montserrat customin tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="335"
                  data-speed="700"
                  data-start="1000"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 60px; text-transform: uppercase; font-weight: bold; letter-spacing:3px;"> NEW ARRIVAL </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme  font-playfair text-center rs-parallaxlevel-4"
                  data-x="center"
                  data-y="450"
                  data-speed="700"
                  data-start="1700"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="color: #fff; font-size: 18px; font-weight: normal; font-style:italic; letter-spacing:0px;"> text text text text text text text<br>
             text text text. </div>

            <!-- Layer -->
            <div class="tp-caption sfb tp-resizeme rs-parallaxlevel-4"
                  data-x="center"
                  data-y="520"
                  data-speed="700"
                  data-start="2400"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                  data-easing="Back.easeOut"
                  data-splitin="none"
                  data-splitout="none"
                  data-elementdelay="0.1"
                  data-endelementdelay="0.1"
                  data-endspeed="300"
                  data-captionhidden="on"
                  style="z-index: 10;"> <a href="#." class="btn">Shop Now</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="#" class="btn btn-1">Discover</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- CONTENT START -->
  <div class="content">

    <!--======= COLLECRION =========-->
    <section class="section-p-30px collection-adds">
      <div class="container">
        <ul class="row">

		 <!-- Collection Add -->
          <li class="col-sm-3 animate fadeInLeft" data-wow-delay="0.6s">
            <div class="inn-sec"> <a href="#."> <img class="img-responsive" src="images/collection-img-1.jpg" alt=""> <span>Yeux</span> </a> </div>
          </li>
		  
          <!-- Collection Add -->
          <li class="col-sm-3 animate fadeInLeft" data-wow-delay="0.4s">
            <div class="inn-sec"> <a href="#."> <img class="img-responsive" src="images/face.jpg" alt=""> <span>Visage</span> </a> </div>
          </li>

         

          <!-- Collection Add -->
          <li class="col-sm-3 animate fadeInRight" data-wow-delay="0.4s">
            <div class="inn-sec"> <a href="#."> <img class="img-responsive" src="images/accesoires.jpg" alt=""> <span>Levres</span> </a> </div>
          </li>

          <!-- Collection Add -->
          <li class="col-sm-3 animate fadeInRight" data-wow-delay="0.4s">
            <div class="inn-sec"> <a href="#."> <img class="img-responsive" src="images/nails.jpg" alt=""> <span>Ongles</span> </a> </div>
          </li>

          <!-- Collection Add 
          <li class="col-sm-3 animate fadeInRight" data-wow-delay="0.6s">
            <div class="inn-sec"> <a href="#."> <img class="img-responsive" src="images/accesoires.jpg" alt=""> <span>Accessoirs</span> </a> </div>
          </li>
		  -->
		  
        </ul>
      </div>
    </section>

    <!--======= Popurlar Product =========-->
    <section class="section-p-30px popurlar_product">
      <div class="container">
        <div class="row">

          <!-- Popurlar Product 1 -->
          <div class="col-md-4  animate fadeInUp" data-wow-delay="0.4s">
            <!-- Popurlar Tittke -->
            <div class="tittle">
              <h5>TOP SALE</h5>
              <p>You must have</p>
            </div>
            <!-- Popurlar Slider -->
            <div class="product-slides">
              <!-- Slide 1 -->
              <div class="items-in">
                <!-- Image -->
                <img src="images/item1.jpg" alt="">
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="images/item1.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">Face Powder</a> <span class="font-montserrat">9.7 Dinar</span> </div>
              </div>

              <!-- Slide 2 -->
              <div class="items-in">
                <!-- Image -->
                <img src="images/item2.jpg" alt="">
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="images/item2.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">Item 2</a> <span class="font-montserrat">13.5 Dinar</span> </div>
              </div>

              <!-- Slide 3 -->
              <div class="items-in">
                <!-- Image -->
                <img src="images/item3.jpg" alt="">
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="images/item3.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">Item 3</a> <span class="font-montserrat">129.00 Dinar</span> </div>
              </div>
            </div>
          </div>

          <!-- Popurlar Product 2 -->
          <div class="col-md-4  animate fadeInUp" data-wow-delay="0.6s">
            <!-- Popurlar Tittle -->
            <div class="tittle">
              <h5>TOP FEATURES</h5>
              <p>Treding </p>
            </div>
            <!-- Popurlar Slider -->
            <div class="product-slides">
              <!-- Slide 1 -->
              <div class="items-in">
                <!-- Image -->
                <img src="images/item2.jpg" alt="">
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="images/item2.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">texttt</a> <span class="font-montserrat">12.00 DT</span> </div>
              </div>

              <!-- Slide 2 -->
              <div class="items-in">
                <!-- Image -->
                <img src="images/item3.jpg" alt="">
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="images/item3.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">Itemmm</a> <span class="font-montserrat">29.00 DT</span> </div>
              </div>
            </div>
          </div>

          <!-- Popurlar Product 1 -->
          <div class="col-md-4  animate fadeInUp" data-wow-delay="0.8s">
            <!-- Popurlar Tittke -->
            <div class="tittle">
              <h5>SALE OFF</h5>
              <p>Best Sale</p>
            </div>
            <!-- Popurlar Slider -->
            <div class="product-slides">
              <!-- Slide 1 -->
              <div class="items-in">
                <!-- Image -->
                <img src="images/item3.jpg" alt="">
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="images/item3.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">Makeup</a> <span class="font-montserrat">19.00 DT</span> </div>
              </div>

              <!-- Slide 2 -->
              <div class="items-in">
                <!-- Image -->
                <img src="images/item2.jpg" alt="">
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="images/item2.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">cattt</a> <span class="font-montserrat">9.00 DT</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--======= Add Blocks =========-->
    <section class="section-p-30px add_block_2">
      <div class="container">
        <ul class="row">
          <li class="col-sm-6 animate fadeInLeft" data-wow-delay="0.4s"> <a href="#."><img src="images/add_block_1.jpg" alt=""></a> </li>
          <li class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s"> <a href="#."><img src="images/add_block_2.jpg" alt=""></a> </li>
        </ul>
      </div>
    </section>

    <!--======= New Arrival =========-->
    <section class="section-p-30px new-arrival">
      <div class="container">

        <!--  Tittle -->
        <div class="tittle animate fadeInUp" data-wow-delay="0.4s">
          <h5>NEW ARRIVAL</h5>
          <p>Treding fashion</p>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
          <li role="presentation" class="active"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">Visage</a></li>
          <li role="presentation"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">Yeux</a></li>
          <li role="presentation"><a href="#access" aria-controls="access" role="tab" data-toggle="tab">L?vres</a></li>
          <li role="presentation"><a href="#shoes" aria-controls="shoes" role="tab" data-toggle="tab">Ongles</a></li>
          <li role="presentation"><a href="#bags" aria-controls="bags" role="tab" data-toggle="tab">Accessoires</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content animate fadeInUp" data-wow-delay="0.4s">
          <!-- MEN?S  -->
          <div role="tabpanel" class="tab-pane fade in active" id="men">

            <!--  New Arrival Tabs Products  -->
            <div class="popurlar_product">
              <ul class="row">

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-1.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-2.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="new-tag"> NEW </div>

                    <!-- Image -->
                    <img src="images/new-item-3.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="hot-tag"> HOT </div>
                    <!-- Image -->
                    <img src="images/new-item-4.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-4.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- WOMAN  -->
          <div role="tabpanel" class="tab-pane fade" id="women">

            <!--  New Arrival Tabs Products  -->
            <div class="popurlar_product">
              <ul class="row">

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-1.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-3.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="new-tag"> NEW </div>

                    <!-- Image -->
                    <img src="images/new-item-2.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="hot-tag"> HOT </div>
                    <!-- Image -->
                    <img src="images/new-item-4.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-4.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- ACCESSORIES  -->
          <div role="tabpanel" class="tab-pane fade" id="access">

            <!--  New Arrival Tabs Products  -->
            <div class="popurlar_product">
              <ul class="row">

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-3.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-1.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="new-tag"> NEW </div>

                    <!-- Image -->
                    <img src="images/new-item-4.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-4.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="hot-tag"> HOT </div>
                    <!-- Image -->
                    <img src="images/new-item-2.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- SHOES  -->
          <div role="tabpanel" class="tab-pane fade" id="shoes">

            <!--  New Arrival Tabs Products  -->
            <div class="popurlar_product">
              <ul class="row">

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-1.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-4.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-4.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="new-tag"> NEW </div>

                    <!-- Image -->
                    <img src="images/new-item-3.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="hot-tag"> HOT </div>
                    <!-- Image -->
                    <img src="images/new-item-2.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- BAGS  -->
          <div role="tabpanel" class="tab-pane fade" id="bags">

            <!--  New Arrival Tabs Products  -->
            <div class="popurlar_product">
              <ul class="row">

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-1.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-1.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!-- Image -->
                    <img src="images/new-item-3.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-3.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="new-tag"> NEW </div>

                    <!-- Image -->
                    <img src="images/new-item-4.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-4.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>

                <!--  New Arrival  -->
                <li class="col-sm-3">
                  <div class="items-in">
                    <!--  Tags  -->
                    <div class="hot-tag"> HOT </div>
                    <!-- Image -->
                    <img src="images/new-item-2.jpg" alt="">
                    <!-- Hover Details -->
                    <div class="over-item">
                      <ul class="animated fadeIn">
                        <li> <a href="images/new-item-2.jpg" data-lighter><i class="ion-search"></i></a></li>
                        <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                        <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                        <li class="full-w"> <a href="#." class="btn">ADD TO CART</a></li>
                        <!-- Rating Stars -->
                        <li class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></li>
                      </ul>
                    </div>
                    <!-- Item Name -->
                    <div class="details-sec"> <a href="#.">LOOSE-FIT TRENCH COAT</a> <span class="font-montserrat">129.00 USD</span> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--======= Benefits =========-->
    <section class="benefits">
      <ul class="row">

        <!--  FREE SHIPPING -->
        <li class="col-md-3 no-padding animate fadeInLeft" data-wow-delay="0.4s">
          <div class="benefit-item odd"> <i class="fa fa-paper-plane-o"></i>
            <h5>FREE SHIPPING</h5>
            <span>All order over 85.00 DT</span> </div>
        </li>

        <!--  Money Back -->
        <li class="col-md-3 no-padding animate fadeInLeft" data-wow-delay="0.6s">
          <div class="benefit-item even"> <i class="fa fa-usd"></i>
            <h5>Money Back</h5>
            <span>100% Money back - 30days</span> </div>
        </li>

        <!--  Best Support -->
        <li class="col-md-3 no-padding animate fadeInRight" data-wow-delay="0.4s">
          <div class="benefit-item odd"> <i class="fa fa-whatsapp"></i>
            <h5>Best Support</h5>
            <span>Fast &amp; pro 24/7</span> </div>
        </li>

        <!--  Gift Card -->
        <li class="col-md-3 no-padding animate fadeInRight" data-wow-delay="0.6s">
          <div class="benefit-item even"> <i class="fa fa-gift"></i>
            <h5>Gift Card</h5>
            <span>Promotion Event for customer</span> </div>
        </li>
      </ul>
    </section>

    <!--======= New Arrival =========-->
    <section class="about-sebian bg-1 animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.4">
      <div class="section-p-60px overlay ">
        <div class="container">

          <!--  Tittle -->
          <div class="tittle white animate fadeInUp" data-wow-delay="0.4s">
            <h5>ABOUT Fashion makeup</h5>
            <p>Treding fashion</p>
          </div>

          <!--  Intro Text  -->
          <div class="text-center animate fadeInUp" data-wow-delay="0.4s">
            <p class="intro-small text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal as opposed to using 'Content here, </p>
            <a href="#." class="btn btn-small"> MORE about Fashion makeup</a> </div>
          <div class="clients-about-in">

            <!--  Tittle -->
            <div class="tittle white animate fadeInUp" data-wow-delay="0.4s">
              <h5>WHAT CLIENT SAY?</h5>
              <p>Our Stories</p>
            </div>

            <!--  What People Says -->
            <div class="clients-about-slider animate fadeInUp" data-wow-delay="0.4s">

              <!--  Slide 1 -->
              <div class="media">
                <div class="media-left">
                  <!--  Avatar -->
                  <div class="avatar"> <img class="media-object" src="images/avatar-1.jpg" alt=""> </div>
                </div>
                <!--  Text -->
                <div class="media-body">
                  <p>?Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.?</p>
                  <hr>
                  <h6>TYRION LANNISTER</h6>
                  <span>Founder-Ceo. Dell Corp</span> </div>
              </div>

              <!--  Slide 2 -->
              <div class="media">
                <div class="media-left">
                  <!--  Avatar -->
                  <div class="avatar"> <img class="media-object" src="images/avatar-2.jpg" alt=""> </div>
                </div>
                <!--  Text -->
                <div class="media-body">
                  <p>?Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.?</p>
                  <hr>
                  <h6>SANSA STARK</h6>
                  <span>Founder-Ceo. Dell Corp</span> </div>
              </div>

              <!--  Slide 3 -->
              <div class="media">
                <div class="media-left">
                  <!--  Avatar -->
                  <div class="avatar"> <img class="media-object" src="images/avatar-3.jpg" alt=""> </div>
                </div>
                <!--  Text -->
                <div class="media-body">
                  <p>?Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.?</p>
                  <hr>
                  <h6>john now</h6>
                  <span>Founder-Ceo. Dell Corp</span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--======= Popurlar Product =========-->
    <section class="section-p-60px blog">
      <div class="container">

    <!--======= Video Part =========-->
    <section class="video-part animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.7">
      <div class="overlay">
        <h4>Through the Curtains of the Waterfall</h4>
        <a href="#pop-open" class="video-btn popup-vedio"><i class="ion-android-arrow-dropright-circle"></i></a>

        <!--  Video Section -->
        <a href="#pop-open" class="link popup-vedio video-btn"></a>

        <!--======= POPUP VIDEO START =========-->
        <div id="pop-open" class="zoom-anim-dialog mfp-hide pop-open-style">
          <div class="pop_up">
            <div class="video">
              <!--  Video Link -->
              <iframe src="https://www.youtube.com/watch?v=5bhxgUhIAH8"></iframe>
            </div>
          </div>
        </div>
        <!--======= POPUP VIDEO END =========-->

      </div>
    </section>

    <!--======= Core Feature =========-->
    <section class="section-p-60px our-clients">
      <div class="container">
        <!--  Tittle -->
        <div class="tittle animate fadeInUp" data-wow-delay="0.4s">
          <h5>Nos marque</h5>
          <p>Contact us if you have any question.</p>
        </div>

        <!--  Text Intro -->
        <p class="font-montserrat intro text-center animate fadeInUp" data-wow-delay="0.4s">our cleint list is composed of some really high names like bla bla bla bla.</p>
        <!--  Client Logo Slider -->
        <div class="client-slide animate fadeInUp" data-wow-delay="0.4s">
          <div class="slide"><a href="#."><img class="img-responsive" src="images/client-logo-1.png" alt=""></a></div>
          <div class="slide"><a href="#."><img class="img-responsive" src="images/client-logo-2.png" alt=""></a></div>
          <div class="slide"><a href="#."><img class="img-responsive" src="images/client-logo-3.png" alt=""></a></div>
          <div class="slide"><a href="#."><img class="img-responsive" src="images/client-logo-4.png" alt=""></a></div>
          <div class="slide"><a href="#."><img class="img-responsive" src="images/client-logo-2.png" alt=""></a></div>
          <div class="slide"><a href="#."><img class="img-responsive" src="images/client-logo-4.png" alt=""></a></div>
        </div>
      </div>
    </section>

    <!--======= Subcribe =========-->
    <section class="subcribe animate fadeInUp" data-wow-delay="0.4s" data-stellar-background-ratio="0.8">
      <div class="overlay">
        <div class="container">
          <h4>subcribe</h4>
          <!--  Subsribe Form -->
          <div class="col-md-7 no-padding pull-right">
            <div class="sub-mail">
              <form>
                <input type="search" placeholder="YOUR EMAIL ADDRESS..">
                <!--  Button -->
                <button type="submit">SUBSCRIBLE</button>
              </form>
            </div>
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
                <li><a href="#."> ABOUT US</a></li>
                <li><a href="#."> DELIVERY INFOMATION</a></li>
                <li><a href="#."> PRIVACY & POLICY</a></li>
                <li><a href="#."> TEMRS & CONDITIONS</a></li>
                <li><a href="#."> MANUFACTURES</a></li>
              </ul>
            </li>

            <!-- MY ACCOUNT -->
            <li class="col-sm-6">
              <h5>MY ACCOUNT</h5>
              <ul class="f-links">
                <li><a href="#.">MY ACCOUNT</a></li>
                <li><a href="#."> LOGIN</a></li>
                <li><a href="#."> MY CART</a></li>
                <li><a href="#."> WISHLIST</a></li>
                <li><a href="#."> CHECKOUT</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- Second Row -->
        <div class="col-md-6">
          <ul class="row">

            <!-- TWITTER -->
            <li class="col-sm-6">
              <h5>TWITTER</h5>
              <p>Check out new work on my @Behance portfolio: "BCreative_Multipurpose Theme" http://on.be.net/1zOOfBQ </p>
            </li>

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
        <p>? 2018 HTML5 TEMPLATE ARTVISION. All Rights Reserved. </p>
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
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.isotope.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:40:59 GMT -->
</html>
