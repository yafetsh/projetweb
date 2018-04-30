
<?php
include "../config.php";
session_start();
$bdd = config::getConnexion();

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membre WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
}

?>
<?PHP
include "../Core/ReclamationCore.php";
$reclamation1C=new ReclamationCore();
$listeReclamations=$reclamation1C->afficherReclamations($_SESSION['id']);

?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/08-02-blog-left-side-bar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:10 GMT -->
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
<!-- Page Wrap -->
<div id="wrap">

  <!-- Header -->
  <header class="header-style-2">
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container">
        <!-- Language -->
        <div class="language"> <a href="#." class="active">EN</a> <a href="#.">FR</a> <a href="#.">GE</a> </div>
        <div class="top-links">
          <ul>
            <li><a href="#.">MY ACCOUNT</a></li>
            <li><a href="#.">MY WISHLIST</a></li>
            <li class="font-montserrat">CURRENCY:
              <select class="selectpicker">
                <option>USD</option>
                <option>EURO</option>
              </select>
            </li>
          </ul>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
            <li class="dribbble"><a href="#."><i class="fa fa-dribbble"></i> </a></li>
            <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
            <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
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
              <ul class="dropdown">
                <li><a href="index.html">Index Defult</a></li>
                <li><a href="index-2.html">Index 2</a></li>
                <li><a href="index-3.html">Index 3</a></li>
                <li><a href="index-4.html">Index 4</a></li>
                <li><a href="index-5.html">Index 5</a></li>
                <li><a href="index-6.html">Index 6</a></li>
                <li><a href="index-7-construction.html">Index Construction</a></li>
                <li><a href="index-8-construction.html">Index Construction 2</a></li>
                <li><a href="index-09-furniture.html">Index Furniture</a></li>
                <li><a href="index-10-sports.html">Index Sports</a></li>
                <li><a href="index-11-beauty.html">Index Beauty</a></li>
                <li><a href="index-12-watches.html">Index Watches</a></li>
              </ul>
            </li>
            <li><a href="12-contact.html">PAGES</a>
              <ul class="dropdown">
                <li><a href="index.html">HOME</a>
                  <ul class="dropdown">
                    <li><a href="index.html">Index Defult</a></li>
                    <li><a href="index-2.html">Index 2</a></li>
                    <li><a href="index-3.html">Index 3</a></li>
                    <li><a href="index-4.html">Index 4</a></li>
                    <li><a href="index-5.html">Index 5</a></li>
                    <li><a href="index-6.html">Index 6</a></li>
                    <li><a href="index-7-construction.html">Index Construction</a></li>
                    <li><a href="index-8-construction.html">Index Construction 2</a></li>
                    <li><a href="index-09-furniture.html">Index Furniture</a></li>
                    <li><a href="index-10-sports.html">Index Sports</a></li>
                    <li><a href="index-11-beauty.html">Index Beauty</a></li>
                    <li><a href="index-12-watches.html">Index Watches</a></li>
                  </ul>
                </li>
                <li><a href="05-about-us-01.html">About</a>
                  <ul class="dropdown">
                    <li><a href="05-about-us-01.html">About US 01</a></li>
                    <li><a href="05-about-us-02.html">About US 02</a></li>
                  </ul>
                </li>
                <li><a href="02-shop-sidebar-right.html">Shop</a>
                  <ul class="dropdown">
                    <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                    <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                    <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                    <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                    <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                    <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                    <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                    <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                    <li><a href="02-shop-details-2.html">Shop Detail 2</a></li>
                    <li><a href="02-shop-details-3.html">Shop Detail 3</a></li>
                  </ul>
                </li>
                <li><a href="09-01-portfolio-grid.html">PORTFOLIO</a>
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
                </li>
                <li><a href="04-contact-01.html">Contact</a>
                  <ul class="dropdown">
                    <li><a href="04-contact-01.html">Contact US 01</a></li>
                    <li><a href="04-contact-02.html">Contact US 02</a></li>
                    <li><a href="04-contact-03.html">Contact US 03</a></li>
                  </ul>
                </li>
                <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                <li><a href="06-404-page.html">404 Page</a></li>
                <li><a href="07-faqs-page.html">Faqs Pages</a></li>
                <li><a href="10-coming-soon.html">Coming Soon</a></li>
              </ul>
            </li>
            <li><a href="02-shop-sidebar-right.html">SHOP</a>
              <!--======= MEGA MENU =========-->
              <div class="megamenu full-width">
                <div class="row nav-post">
                  <div class="col-sm-3">
                    <h6>Shop Pages</h6>
                    <ul>
                      <li><a href="02-shop-sidebar-right.html">Shop Sidebar Right</a></li>
                      <li><a href="02-shop-sidebar-left.html">Shop Sidebar Left</a></li>
                      <li><a href="02-shop-sidebar.html">Shop Sidebar</a></li>
                      <li><a href="02-shop-list-view.html">Shop LIST</a></li>
                      <li><a href="02-shop-full_width-03.html">Shop Full 2 Col</a></li>
                      <li><a href="02-shop-full_width-02.html">Shop Full 3 Col</a></li>
                      <li><a href="02-shop-full_width-01.html">Shop Full 4 Col</a></li>
                      <li><a href="02-shop-details-1.html">Shop Detail</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h6>Blog Pages</h6>
                    <ul>
                      <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                      <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                      <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                      <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                      <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                      <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                      <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                      <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h6>Portfolio Pages</h6>
                    <ul>
                      <li><a href="09-01-portfolio-grid.html">PORTFOLIO GRID 02 COL</a></li>
                      <li><a href="09-02-portfolio-grid.html">PORTFOLIO GRID 03 COL</a></li>
                      <li><a href="09-03-portfolio-grid.html">PORTFOLIO GRID 04 COL</a></li>
                      <li><a href="09-03-portfolio-full-width.html">PORTFOLIO FULLWIDTH</a></li>
                      <li><a href="09-05-portfolio-grid-default.html">PORTFOLIO 02 COL</a></li>
                      <li><a href="09-06-portfolio-grid-default.html">PORTFOLIO 03 COL</a></li>
                      <li><a href="09-07-portfolio-grid-default.html">PORTFOLIO 04 COL</a></li>
                      <li><a href="09-08-portfolio-masonry.html">PORTFOLIO MANSORY 01</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-3">
                    <h6>Portfolio Pages</h6>
                    <ul>
                      <li><a href="09-09-portfolio-masonry.html">PORTFOLIO MANSORY 02</a></li>
                      <li><a href="09-10-portfolio-single.html">Portfolio Single 01</a></li>
                      <li><a href="09-11-portfolio-single.html">Portfolio Single 02</a></li>
                      <li><a href="05-about-us-01.html">About US 01</a></li>
                      <li><a href="05-about-us-02.html">About US 02</a></li>
                      <li><a href="04-contact-01.html">Contact US</a></li>
                      <li><a href="03-pay-checkout.html">Pay Checkout</a></li>
                      <li><a href="03-pay-viewcart.html">Pay Viewcart</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li><a href="index.html">LOOKBOOK</a>
              <!--======= MEGA MENU =========-->
              <div class="megamenu full-width look-book">
                <div class="row nav-post">
                  <div class="col-sm-2">
                    <h6>Shop</h6>
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
            <li><a href="08-01-blog-mansory.html">BLOG</a>
              <ul class="dropdown">
                <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
                <li><a href="08-02-blog-left-side-bar.html">Blog Left Side Bar</a></li>
                <li><a href="08-02-blog-right-side-bar.html">Blog Right Side Bar</a></li>
                <li><a href="08-04-blog-medium-image.html">Blog Medium Image</a></li>
                <li><a href="08-05-blog-large-images.html">Blog Large Images</a></li>
                <li><a href="08-06-blog-02-col.html">Blog 02 Col</a></li>
                <li><a href="08-07-blog-03-col.html">Blog 03 Col</a></li>
                <li><a href="08-08-blog-04-col.html">Blog 04 Col</a></li>
              </ul>
            </li>
            <li><a href="09-01-portfolio-grid.html">PORTFOLIO </a>
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
            </li>
            <li><a href="04-contact-01.html">CONTACT</a>
              <ul class="dropdown">
                <li><a href="04-contact-01.html">Contact US 01</a></li>
                <li><a href="04-contact-02.html">Contact US 02</a></li>
                <li><a href="04-contact-03.html">Contact US 03</a></li>
              </ul>
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

  <!-- CONTENT START -->
  <div class="content">

    <!--======= SUB BANNER =========-->
    <section class="sub-banner">
      <div class="container">
        <h4>PROFIL FASHION MAKE UP</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#"><?php echo $_SESSION['pseudo']; ?></a></li>
          <li class="active"><?php echo $_SESSION['mail']; ?></li>
        </ol>
      </div>
    </section>

    <!-- Blog -->
    <section class="section-p-30px blog-page">
      <div class="container">
        <div class="row">

          <!-- Left Side Bar -->
          <div class="col-sm-3 animate fadeInLeft" data-wow-delay="0.4s">
            <div class="side-bar">

              <!--  SEARCH -->
              <div class="search">
                <form>
                  <input type="text" placeholder="SEARCH FAQ">
                  <button type="submit"> <i class="fa fa-search"></i></button>
                </form>
              </div>

              <!-- HEADING -->
              <div class="heading">
                <h4>MON COMPTE</h4>
              </div>

              <!-- CATEGORIES -->
              <ul class="cate">
                <li><a href="edit.php">EDITER MON COMPTE</a></li>
                <li><a href="#."> CONSULTER PANIER</a></li>
                <li><a href="#."> CONSULTER LIVRAISON</a></li>
                <li><a href="#." style="text-transform:uppercase"> CONSULTER mes réclamations</a></li>
                <li><a href="#." style="text-transform:uppercase"> CONSULTER mes réservations</a></li>
                <li><a href="#.">MESSAGERIE</a></li>
                <li><a href="chat.php">FORUM</a></li>
                <li><a href="disconnect.php">DÉCONNEXION</a></li>

              </ul>
<ul>

</ul>
              <!-- HEADING -->


              <!-- HEADING -->

              <!-- CATEGORIES -->


              <!-- TAGS -->
              <h4 class="margin-t-40">PRODUIT TAGS</h4>
              <ul class="tags">
                <li><a href="#.">FASHION</a></li>
                <li><a href="#.">BAGS</a></li>
                <li><a href="#.">TABLET</a></li>
                <li><a href="#.">ELECTRONIC</a></li>
                <li><a href="#.">BEAUTY</a></li>
                <li><a href="#.">TRtENDING</a></li>
                <li><a href="#.">SHOES</a></li>
              </ul>
            </div>
          </div>

          <!-- Right Bar -->
          <div class="col-sm-9 animate fadeInRight" data-wow-delay="0.4s">
            <!--  Blog Posts -->
            <div class="blog-posts">
              <ul>
                <!--  Posts 1 -->
                <li class="animate fadeInUp" data-wow-delay="0.4s">
                  <!--  Image -->
                  <img class="img-responsive" src="http://www.femmesmaghrebines.com/wp-content/uploads/manel-3-676x400.jpg" alt="">
                  <fieldset style="margin:auto">
      						  <legend style="border=2px;text-transform:uppercase;">
      Mes réclamations
      						  </legend>
      							<a href="ajouterReclamation.php" class="menu_section" style="text-transform:uppercase;"> Passer une réclamation</a>
      							<br>
      							<br>
      						<div >


      						<div >

      								<table class="table table-striped table-bordered">
      									<thead>
      										<tr>
      											<th>Nom</th>
      											<th>Prénom</th>
      											<th>Adresse mail</th>
      											<th>Téléphone</th>
      											<th>Type</th>
                            <th>Cause</th>
                            <th>Etat</th>
      											<th>Action</th>

      										</tr>
      									</thead>
      									<tbody>
      									<?php
      									 foreach ($listeReclamations as $row) {
      														echo '<tr>';
      														echo '<td width="10%">'. $row['nom'] . '</td>';
      														echo '<td width="10%">'. $row['prenom'] . '</td>';
                                  echo '<td width="10%">'. $row['mail'] . '</td>';
      														echo '<td width="10%">'. $row['telephone'] . '</td>';
      														echo '<td width="10%">'. $row['type'] . '</td>';
      														echo '<td width="10%">'. $row['cause'] . '</td>';
                                  echo '<td width="10%">'. $row['etat'] . '</td>';
      														echo '<td width="30%">';

      																							 echo '<a  href="modifierReclamation.php?id='.$row['id'].'">Modifier</a>';
      																			echo ' ';
      																			echo '<a href="suppressionReclamation.php?id='.$row['id'].'">Annuler</a>';
      															 echo '</td>';
      																	echo '</tr>';
      									 }
      									?>
      									</tbody>
      						</table>
      						</div>

      	</div>

      </fieldset>
                  <!-- Tag Icon -->
                  <div class="blog-tag-icon"> <i class="fa fa-pencil"></i> </div>
                  <span class="tags">CONSEILS ET DÉMONSTRATION</span> <a href="#." class="tittle-post font-playfair">OMBRES À PAUPIÉRES FASHION MAKEUP</a>
                  <p> Plus qu'une tendance, le maquillage nude est devenu le look beauté à maitriser quelle que soit la saison. De jour comme de nuit, il sublime nos traits tout en restant discret. Alors pour maitriser vous aussi ce maquillage et arborer une mine de poupée, suivez pas à pas comment faire un maquillage nude.</p>
                  <!--  Post Info -->
                  <ul class="info">
                    <li><i class="fa fa-user"></i> admin</li>
                    <li><i class="fa fa-calendar-o"></i> 12 JULY</li>
                    <li><i class="fa fa-eye"></i> 325</li>
                    <li class="read-right"><a class="btn btn-small btn-dark" href="#.">READ MORE</a></li>
                  </ul>
                </li>

                <!--  Posts 2 -->
                <li class="animate fadeInUp" data-wow-delay="0.4s">
                  <!--  Image -->

                  <!--  Video Section -->

                  <section class="vid"> <img class="img-responsive" src="https://i.ytimg.com/vi/jzxPOwgpVFs/maxresdefault.jpg" alt="">
                    <div class="position-center-center"> <a href="#." class="video-btn"></a> </div>
                  </section>

                  <!-- Tag Icon -->
                  <div class="blog-tag-icon"> <i class="fa fa-film"></i> </div>
                  <span class="tags">TRENDING NEWS</span> <a href="#." class="tittle-post font-playfair"> Standard post with featured video</a>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                    expedita distinctio. <br>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non </p>
                  <!--  Post Info -->
                  <ul class="info">
                    <li><i class="fa fa-user"></i> admin</li>
                    <li><i class="fa fa-calendar-o"></i> 12 JULY</li>
                    <li><i class="fa fa-eye"></i> 325</li>
                  </ul>
                </li>

                <!--  Posts 3 -->
                <li class="animate fadeInUp" data-wow-delay="0.4s">
                  <!--  Image -->
                  <div class="product-slides">
                    <div><img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-v2I1ykOpVwHjm1aZpbjjz8OwP_4Wv6tei0BVokYcmOYCLNdq" alt=""></div>
                    <div><img class="img-responsive" src="images/blog-large-2.jpg" alt=""></div>
                    <div><img class="img-responsive" src="images/blog-large-1.jpg" alt=""></div>
                  </div>
                  <!-- Tag Icon -->
                  <div class="blog-tag-icon"> <i class="fa fa-picture-o"></i></div>
                  <span class="tags">MOTION GRAPHIC</span> <a href="#." class="tittle-post font-playfair">Standard post with slide images</a>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                    expedita distinctio. <br>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non </p>
                  <!--  Post Info -->
                  <ul class="info">
                    <li><i class="fa fa-user"></i> admin</li>
                    <li><i class="fa fa-calendar-o"></i> 12 JULY</li>
                    <li><i class="fa fa-eye"></i> 325</li>
                  </ul>
                </li>

                <!--  Posts 4 -->
                <li class="animate fadeInUp" data-wow-delay="0.4s">
                  <!-- Image -->
                  <a href="#." class="link-post"> http://fortawesome.github.io/Font-Awesome </a>

                  <!-- Tag Icon -->
                  <div class="blog-tag-icon"> <i class="fa fa-link"></i></div>
                  <span class="tags">MOTION GRAPHIC</span> <a href="#." class="tittle-post font-playfair">Standard post with Link</a>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                    expedita distinctio. <br>
                    At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non </p>
                  <!--  Post Info -->
                  <ul class="info">
                    <li><i class="fa fa-user"></i> admin</li>
                    <li><i class="fa fa-calendar-o"></i> 12 JULY</li>
                    <li><i class="fa fa-eye"></i> 325</li>
                  </ul>
                </li>
              </ul>
            </div>

            <!--======= PAGINATION =========-->
            <ul class="pagination animate fadeInUp" data-wow-delay="0.4s">
              <li><a href="#.">Fb</a></li>
              <li><a href="#.">insta</a></li>
              <li><a href="#.">snap</a></li>
              <li><a href="#."><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!--======= Footer =========-->
  <footer>
    <div class="container">
      <div class="text-center"> <a href="#."><img src="images/logo.png" alt=""></a><br>
        <img class="margin-t-40" src="images/hammer.png" alt="">
        <p class="intro-small margin-t-40">Multipurpose E-Commerce Theme is suitable for furniture store, fashion shop, accessories, electric shop. We have included multiple layouts for home page to give you best selections in customization.</p>
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
        <p>© 2015 HTML5 TEMPLATE SEBIAN. All Rights Reserved. Powered By WPELITE</p>
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
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/08-02-blog-left-side-bar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:14 GMT -->
</html>
