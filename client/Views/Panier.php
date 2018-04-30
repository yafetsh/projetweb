<?php
require '../Core/PanierCore.php' ;
require '../Entities/panier.php';
$Panier=new PanierCore();

if (isset($_GET['code']))
{


}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/02-shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fashion Make Up</title>
    <meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Fashion Make up">
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
                                                        <h6 class="media-heading"><?php echo $row->nom; ?></h6>
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
        <!-- CONTENT START -->
        <form method="POST" action="Panier.php">
        <div class="content">

            <!--======= SUB BANNER =========-->
            <section class="sub-banner">
                <div class="container">
                    <h4>CHARIOT</h4>
                    <!-- Breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">CHARIOT</li>
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
                            <li class="col-sm-4 current"> <i class="fa fa-shopping-cart"></i>
                                <h6>SHOPPING CART</h6>
                            </li>

                            <!-- CHECK OUT DETAIL -->
                            <li class="col-sm-4"> <i class="fa fa-align-left"></i>
                                <h6>CHECK OUT DETAIL</h6>
                            </li>

                            <!-- ORDER COMPLETE -->
                            <li class="col-sm-4"> <i class="fa fa-check"></i>
                                <h6>COMMANDE TERMINÉE</h6>
                            </li>
                        </ul>
                    </div>

                    <!-- Payments Steps -->
                    <div class="shopping-cart text-center">
                        <div class="cart-head">
                            <ul class="row">
                                <!-- PRODUCTS -->
                                <li class="col-sm-3">
                                    <h6>PRODUCTS</h6>
                                </li>
                                <!-- NAME -->
                                <li class="col-sm-3">
                                    <h6>NAME</h6>
                                </li>
                                <!-- QTY -->
                                <li class="col-sm-1">
                                    <h6>QTY</h6>
                                </li>
                                <!-- PRICE -->
                                <li class="col-sm-2">
                                    <h6>PRICE</h6>
                                </li>
                                <!-- TOTAL PRICE -->
                                <li class="col-sm-2">
                                    <h6>TOTAL PRICE</h6>
                                </li>
                                <li class="col-sm-1"> </li>
                            </ul>
                        </div>

                        <!-- Cart Details -->
                        <?PHP
                        $ids=array_keys($_SESSION['panier']);
                        if(empty($ids))
                        {
                            $products=array();

                        }
                        else {
                            $products = $Panier->AfficherPanierSession("select * from produit where reference IN (" . implode(",", $ids) . ")");
                            foreach($products as $row){
                                ?>
                        <ul class="row cart-details">
                            <li class="col-sm-6">
                                <div class="media">
                                    <!-- Media Image -->

                                    <div class="media-left media-middle"> <a href="#." class="item-img"> <img class="media-object" src="images/new-item-<?php echo $row->reference; ?>.jpg" alt=""> </a> </div>

                                    <!-- Item Name -->
                                    <div class="media-body">
                                        <div class="position-center-center">
                                            <h6><?php echo $row->nom; ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- QTY -->
                            <li class="col-sm-1">
                                <div class="position-center-center">
                                    <input type="text" value="<?php echo $_SESSION['panier'][$row->reference]; ?>" name="panier[quantite][<?php echo $row->reference ?>]">
                                </div>
                            </li>

                            <!-- PRICE -->
                            <li class="col-sm-2">
                                <div class="position-center-center"> <span><?php echo number_format($row->prix, 2, ',', ''); ?> TND</span> </div>
                            </li>
                            <!-- TOTAL PRICE -->
                            <li class="col-sm-2">
                                <div class="position-center-center"> <span><?php echo number_format($row->prix* $_SESSION['panier'][$row->reference], 2, ',', '') ; ?>TND</span> </div>
                            </li>

                            <!-- EDIT AND REMOVE -->
                            <li class="col-sm-1">
                                <div class="position-center-center"> <a href="#."><i class="fa fa-pencil-square-o"></i> </a> <a href="Panier.php?delPanier=<?=$row->reference ?>"><i class="fa fa-times"></i></a> </div>
                            </li>
                        </ul>
                        <?php }
                        }
                         ?>

                        <!-- BTN INFO -->
                        <div class="btn-sec">

                            <!-- CLEAR SHOPPING CART -->
                            <a href="#." class="btn btn-dark"> <i class="fa fa-trash-o"></i> CLEAR SHOPPING CART </a>

                            <!-- UPDATE SHOPPING CART -->

                                <button type="submit" class="btn btn-dark"><i class="fa fa-arrow-circle-o-up"></i>MISE À JOUR PANIER</button>
                            </form>
                            <!-- CONTINUE SHOPPING -->
                            <a href="Produit.php" class="btn btn-dark right-btn"> <i class="fa fa-shopping-cart"></i> CONTINUE SHOPPING </a> </div>

                        <!-- SHOPPING INFORMATION -->
                        <div class="cart-ship-info">
                            <div class="row">

                                <!-- DISCOUNT CODE -->
                                <div class="col-sm-4">
                                    <h6>DISCOUNT CODE</h6>
                                    <form action="Panier.php" method="get">
                                        <input type="text" name="code" value="" placeholder="ENTER YOUR CODE IF YOU HAVE ONE">
                                        <button type="submit" class="btn btn-small btn-dark">APPLY CODE</button>
                                    </form>
                                </div>

                                <!-- ESTIMATE SHIPPING & TAX -->
                                <div class="col-sm-4">
                                    <h6>ESTIMATE SHIPPING & TAX</h6>
                                    <form>
                                        <!-- *COUNTRY -->
                                        <label> *Pays
                                            <select class="selectpicker">
                                                <option>UNITED KINGDOM</option>
                                                <option>UNITED STATE</option>
                                                <option>PAKISTAN</option>
                                            </select>
                                        </label>

                                        <!-- STATE/PROVINCE -->
                                        <label> ÉTAT / PROVINCE
                                            <input type="text" value="" placeholder="">
                                        </label>
                                        <!-- ZIP/POSTAL CODE -->
                                        <label> ZIP / CODE POSTAL
                                            <input type="text" value="" placeholder="">
                                        </label>
                                        <button type="submit" class="btn btn-small btn-dark">Appliquer le code</button>
                                    </form>
                                </div>

                                <!-- SUB TOTAL -->
                                <div class="col-sm-4">
                                    <div class="grand-total"> <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> TND</span>
                                        <h4>GRAND: <span><?php echo number_format($Panier->total(), 2, ',', ''); ?> TND</span></h4>
                                        <a href="connexioncommande.php" class="btn">PASSER À LA CAISSE</a>
                                        <p>Commander avec plusieurs adresses</p>
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
            <div class="text-center"> <a href="#."><img src="images/logo-dark1.png" alt=""></a><br>
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
<script src="js/jquery.nouislider.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/main.js"></script>
<script>
    jQuery(document).ready(function($) {

        //  Price Filter ( noUiSlider Plugin)
        $("#price-range").noUiSlider({
            range: {
                'min': [0],
                'max': [1000]
            },
            start: [40, 940],
            connect: true,
            serialization: {
                lower: [
                    $.Link({
                        target: $("#price-min")
                    })
                ],
                upper: [
                    $.Link({
                        target: $("#price-max")
                    })
                ],
                format: {
                    // Set formatting
                    decimals: 2,
                    prefix: '$'
                }
            }
        })
    })

</script>
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/02-shop-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:11 GMT -->

</html>