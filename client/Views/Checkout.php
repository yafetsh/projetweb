<?php
require '../Core/PanierCore.php' ;
require '../Entities/panier.php';
$Panier=new PanierCore();
if (isset($_POST['commander']))
{

}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/03-pay-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:06 GMT -->
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
                <div class="top-links">
                    <ul>
                        <?php if (isset($_SESSION['id'])){ ?>
                            <li><a href="#.">Bonjour <?php echo $_SESSION['pseudo']; ?></a></li>
                            <li><a href="disconnect.php">Se deconnecter</a></li>
                        <?php } else { ?>
                            <li><a href="connexion.php">Se connecter</a></li>
                        <?php } ?>
                    </ul>
                    <!-- Social Icons -->
                    <ul class="social_icons">
                        <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
                        <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
                        <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i> </a></li>
                    </ul>
                </div>
            </div>

            <!-- Logo -->
            <div class="container">
                <div class="logo"> <a href="#."><img src="images/logo-dark.png" alt=""></a> </div>
            </div>

            <!-- Nav -->
            <div class="sticky">
                <div class="container" style="visibility: initial;">
                    <nav>
                        <ul id="ownmenu" class="ownmenu">
                            <li class="active"><a href="index.php">ACCUEIL</a>
                            </li>
                            <li><a href="Produit.php">PRODUITS</a>
                                <!--======= MEGA MENU =========-->
                                <div class="megamenu full-width">
                                    <div class="row nav-post">
                                        <div class="col-sm-3">
                                            <h6>VISAGE</h6>
                                            <ul>
                                                <li><a href="Produit.html">categorie 1</a></li>
                                                <li><a href="Produit.html">categorie 2</a></li>
                                                <li><a href="Produit.html">categorie 3</a></li>
                                                <li><a href="Produit.html">categorie 4</a></li>
                                                <li><a href="Produit.html">categorie 5</a></li>
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
                            <li><a href="12-contact.html">PROMOTIONS</a>
                            <li><a href="08-01-blog-mansory.html">A PROPOS</a>
                                <ul class="dropdown">
                                    <li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>
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
                            <?php if (empty($_SESSION['id'])){?>
                            <li class="shop-cart"><a href="Panier.php"><i class="fa fa-shopping-cart"></i></a> <span class="numb"><?php echo $Panier->count();?></span>
                                <?php } else { ?>
                            <li class="shop-cart"><a href="Panier.php"><i class="fa fa-shopping-cart"></i></a> <span class="numb"><?php echo $Panier->notif();?></span>
                                <?php } ?>
                                <ul class="dropdown">
                                    <?php

                                    $ids=array_keys($_SESSION['panier']);
                                    if(empty($ids))
                                    {
                                        $prod=array();

                                    }
                                    else {
                                        $prod = $Panier->AfficherPanierSession("select * from produit where reference IN (" . implode(",", $ids) . ")");
                                        foreach($prod as $row) {
                                            ?>
                                            <li>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="cart-img"><a href="#"> <img
                                                                        class="media-object img-responsive"
                                                                        src="images/new-item-<?php echo $row->reference; ?>.jpg"
                                                                        alt="..."> </a></div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading"><?php echo $row->description; ?></h6>
                                                        <span class="price"><?php echo number_format($row->prix, 2, ',', ''); ?>
                                                            TND </span> <span class="qty">Quantité: <?php echo $_SESSION['panier'][$row->reference]; ?></span></div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <li class="no-padding no-border">
                                        <h5 class="text-center">TOTAL:<?php echo number_format($Panier->total(), 2, ',', ''); ?></h5>
                                    </li>
                                    <li class="no-padding no-border">
                                        <div class="row">

                                            <div class="col-xs-6 "> <a href="connexioncommande.php" class="btn btn-1 btn-small">VALIDER</a></div>
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
                                            </select>
                                        </div>
                                        <div class="col-sm-8 no-padding">
                                            <input type="search" class="form-control" placeholder="Rechercher">
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
                <h4>SHOPPING CART</h4>
                <!-- Breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">SHOPPING CART</li>
                </ol>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="section-p-30px pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="payment_steps">
                    <ul class="row">
                        <!-- SHOPPING CART -->
                        <li class="col-sm-4"> <i class="fa fa-shopping-cart"></i>
                            <h6>SHOPPING CART</h6>
                        </li>

                        <!-- CHECK OUT DETAIL -->
                        <li class="col-sm-4 current"> <i class="fa fa-align-left"></i>
                            <h6>CHECK OUT DETAIL</h6>
                        </li>

                        <!-- ORDER COMPLETE -->
                        <li class="col-sm-4"> <i class="fa fa-check"></i>
                            <h6>ORDER COMPLETE</h6>
                        </li>
                    </ul>
                </div>

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <h6>BILLING DETAILS</h6>
                                <form>
                                    <ul class="row">

                                        <!-- *COUNTRY -->
                                        <li class="col-md-12">
                                            <label> *COUNTRY
                                                <select class="selectpicker">
                                                    <option>UNITED KINGDOM</option>
                                                    <option>UNITED STATE</option>
                                                    <option>PAKISTAN</option>
                                                </select>
                                            </label>
                                        </li>
                                        <!-- Name -->
                                        <li class="col-md-6">
                                            <label> *FIRST NAME
                                                <input type="text" name="first-name" value="" placeholder="">
                                            </label>
                                        </li>
                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *LAST NAME
                                                <input type="text" name="last-name" value="" placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <!-- COMPANY NAME -->
                                            <label>COMPANY NAME
                                                <input type="text" name="company" value="" placeholder="">
                                            </label>
                                        </li>
                                        <li class="col-md-12">
                                            <!-- ADDRESS -->
                                            <label>*ADDRESS
                                                <input type="text" name="address" value="" placeholder="">
                                                <input type="text" name="address" value="" placeholder="Optional">
                                            </label>
                                        </li>
                                        <!-- TOWN/CITY -->
                                        <li class="col-md-12">
                                            <label>*TOWN/CITY
                                                <input type="text" name="town" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- COUNTRY -->
                                        <li class="col-md-6">
                                            <label> COUNTRY
                                                <input type="text" name="contry-state" value="" placeholder="STATE/COUNTRY">
                                            </label>
                                        </li>

                                        <!-- POSTCODE -->
                                        <li class="col-md-6">
                                            <label> *POSTCODE
                                                <input type="text" name="postal-code" value="" placeholder="POSTCODE/ZIP">
                                            </label>
                                        </li>

                                        <!-- EMAIL ADDRESS -->
                                        <li class="col-md-6">
                                            <label> *EMAIL ADDRESS
                                                <input type="text" name="contry-state" value="" placeholder="">
                                            </label>
                                        </li>
                                        <!-- PHONE -->
                                        <li class="col-md-6">
                                            <label> *PHONE
                                                <input type="text" name="postal-code" value="" placeholder="">
                                            </label>
                                        </li>

                                        <!-- CREATE AN ACCOUNT -->
                                        <li class="col-md-6">
                                            <div class="checkbox">
                                                <input id="checkbox1" class="styled" type="checkbox">
                                                <label for="checkbox1"> CREATE AN ACCOUNT ? </label>
                                            </div>
                                        </li>

                                        <!-- SHIP TO BILLING ADDRESS -->
                                        <li class="col-md-6">
                                            <div class="checkbox">
                                                <input id="checkbox2" class="styled" type="checkbox">
                                                <label for="checkbox2"> SHIP TO BILLING ADDRESS? </label>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <!-- SUB TOTAL -->
                            <div class="col-sm-5">
                                <div class="order-place">
                                    <h5>Votre Commande</h5>
                                    <div class="order-detail">
                                        <p>Produit <span>TOTAL</span></p>
                                        <div class="item-order">
                                            <?php
                                            $ids=array_keys($_SESSION['panier']);
                                            if(empty($ids))
                                            {
                                                $prod=array();

                                            }
                                            else {
                                                $prod = $Panier->AfficherPanierSession("select * from produit where reference IN (" . implode(",", $ids) . ")");
                                                foreach ($prod as $row) {
                                                    ?>
                                                    <p><?php echo $row->description; ?><span
                                                                class="color"> x<?php echo $_SESSION['panier'][$row->reference]  ?> </span>
                                                    </p>
                                                    <p>COLOR: BLACK </p>
                                                    <p class="text-right"><?php echo number_format($row->prix, 2, ',', ''); ?>
                                                        TND</p>
                                                <?php }
                                            }?>
                                        </div>
                                        <p>CART SUBTOTAL <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> TND</span></p>
                                        <p>ORDER TOTAL <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> TND</span></p>
                                    </div>
                                    <div class="pay-meth">
                                        <form action="choisirpayment.php" method="post">
                                        <h5>Methodes de Payments</h5>
                                        <ul>

                                            <li>
                                                <div class="checkbox">
                                                    <input name="checkbox3-2" class="styled" type="checkbox" value="CHEQUE PAYMENT">
                                                    <label for="checkbox3-2"> CHEQUE PAYMENT </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="checkbox3-2" class="styled" type="checkbox" value="paypal">
                                                    <label for="checkbox3-2"> PAYPAL </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="checkbox3-3" class="styled" type="checkbox">
                                                    <label for="checkbox3-3"> I’VE READ AND ACCEPT THE <span class="color"> TERMS & CONDITIONS </span> </label>
                                                </div>
                                            </li>
                                        </ul>
                                        <input type="submit" class="btn btn-small btn-dark pull-right" value="Valider payment">

                                            <a href="Pdf.php">
                                                <input  class="btn btn-small btn-dark pull-right" value="Imprimer Facture">
                                            </a>
                                    </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--======= RELATED PRODUCTS =========-->
            <section class="section-p-60px new-arrival new-arri-w-slide">
                <div class="container">

                    <!--  Tittle -->
                    <div class="tittle tittle-2">
                        <h5>RELATED PRODUCTS</h5>
                        <p class="font-playfair">Most haver in your Shop </p>
                    </div>

                    <!--  New Arrival Tabs Products  -->
                    <div class="popurlar_product client-slide">

                        <!--  New Arrival  -->
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

                        <!--  New Arrival  -->
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

                        <!--  New Arrival  -->
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

                        <!--  New Arrival  -->
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
                    </div>
                </div>
            </section>
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

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/03-pay-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:06 GMT -->
</html>