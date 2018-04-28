<?php

    include_once "../Entities/produit.php";
    include_once "../Entities/image.php";
    include_once "../Entities/categorie.php";
    include_once "../Entities/sous_categorie.php";
    include_once "../Entities/commentaire.php";
    include_once "../Core/produitC.php";
    include_once "../Core/imageC.php";
    include_once "../Core/categorieC.php";
    include_once "../Core/sous_categorieC.php";
    include_once "../Core/commentaireC.php";

    session_start();

    $C = new categorieC();
    $categorie = $C->afficher();
    $prodC = new produitC();
    $prod = $prodC->recuperer_produit($_POST['reference_p']);
    $imgC = new imageC();
    $img = $imgC->recupererimage($_POST['reference_p']);
    foreach ($prod as $key) {
      $ref = $key['reference'];
      $nom = $key['nom'];
      $prix = $key['prix'];
      $desc = $key['description'];
      $q = $key['quantite_total'];
      if(intval($q)>0)
        $quantite = "Disponible";
      else
        $quantite="Indisponible";
    }
  ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/02-shop-details-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:15 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $nom; ?></title>
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
    <div class="position-center-center"> <img src="images/fashionmakeup.PNG" alt="">
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
                            <?php
                                if(isset($_SESSION['id'])){
                            ?>
                                <li><a href="#.">MOM COMPTE</a></li>
                                <li><a href="#.">MES FAVORIS</a></li>
                                <li><a href="disconnect.php">SE DECONNECTER</a></li>

                             <?php     
                                }
                                else{
                              ?>
                                  <li><a href="connexion.php">SE CONNECTER</a></li>
                              <?php
                                }
                             ?>
                            
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
                    <div class="logo"> <a href="#."><img src="images/Logo_FM-Transp_02.png" alt="" style="width: 250px; height: 150px;"></a> </div>
                </div>

                <!-- Nav -->
                <div class="sticky">
                    <div class="container" style="visibility: initial;">
                        <nav>
                            <ul id="ownmenu" class="ownmenu">
                                <li class="active"><a href="index.html">ACCUEIL</a>
                                </li>
                                <li><a href="Produit1.php">PRODUITS</a>
                                    <!--======= MEGA MENU =========-->
                                    <div class="megamenu full-width">
                                        <div class="row nav-post">
                                            <form>
                                            <?php

                                                foreach ($categorie as $key) {
                                            ?>
                                                <div class="col-sm-3">
                                                    <center>
                                                        <h6><?php echo $key['nom'];?></h6>
                                                    </center>
                                                    
                                                    <!--<li><a href="08-01-blog-mansory.html">Blog Mansory</a></li>-->
                                                    <?php
                                                        $sous_categorieC = new sous_categorieC();
                                                        $liste = $sous_categorieC->recuperer($key['reference']);
                                                        foreach ($liste as $row) {
                                                    ?>
                                                        <form method="POST" action="Produit2.php">
                                                            <input type="text" name="type_produit" value="<?php echo $row['nom']; ?>" hidden>
                                                            <li><input type="submit" value="<?php echo $row['nom']; ?>" style="width: 220px; background-color: #272727; color: white; margin : auto;"> </li>
                                                        </form>
                                                        
                                                    <?php
                                                        }
                                                      ?>
                                                </div>
                                            <?php
                                                }

                                              ?>
                                              </form>
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
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <h4>DRAEY TRENCH COAT</h4>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">SHOP</a></li>
          <li class="active">DRAEY TRENCH COAT</li>
        </ol>
      </div>
    </section>
    
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in item-detail-page">
      <div class="container">
        <div class="row"> 
          
          <!--======= IMAGES SLIDER =========-->
          <div class="col-sm-6 large-detail animate fadeInLeft" data-wow-delay="0.4s">
            <div class="images-slider">
              <ul class="slides">
                <?php
                  foreach ($img as $key) {
                ?>
                    <li data-thumb="../../admin/Views/production/images/<?php echo $key['chemin']; ?>" > <img class="img-responsive" src="../../admin/Views/production/images/<?php echo $key['chemin']; ?>"  alt="" style="max-height: 700px;"> </li>

                <?php
                  }
                  ?>
                
            </div>
          </div>
          
          <!--======= ITEM DETAILS =========-->
          <div class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-sm-12">
                <h5><?php echo($nom); ?></h5>
                <span class="price"><?php echo($prix."DT");  ?></span> </div>
              <div class="col-sm-12"> <span class="code">PRODUCT CODE: TUN: FMU--01.</span>
                <div class="some-info no-border"> <br>
                  <?php
                    if($quantite == "Disponible"){
                  ?>
                    <div class="in-stoke"> <i class="fa fa-check-circle"></i><?php echo($quantite); ?></div>
                  <?php
                    }
                    else{
                  ?>
                    <div class="in-stoke"> <i class="fa fa-ban"></i><?php echo($quantite); ?></div>
                  <?php
                    }
                    ?>
                    


                  <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div>
                  <a href="#review"  class="review">(3) Review</a> &nbsp;&nbsp;&nbsp; <a href="#review-form" class="review">Add Your Review</a></div>
                <hr>
              </div>
            </div>
            <p><?php echo($desc); ?></p>
            <hr>
            <div class="row">
              <div class="col-sm-12">
                <div class="item-select"> 
                  <!-- COLOR -->
                  <p>*couleur disponible</p>
                  <select class="selectpicker">
                    <?php
                      foreach ($img as $key) {
                        if($key['quantite']>0){
                    ?>
                        <option style="background-color: <?php echo $key['couleur'];?>">..</option>
                    <?php
                        }
                      }
                      ?>
                  </select>
                </div>
              </div>
              
            </div>
            <div class="row"> 
              <!-- QUIENTY -->
              <div class="col-sm-12">
                <div class="fun-share">
                  <input type="text" value="1">
                  <a href="#." class="btn btn-small btn-dark">AJOUTER AU PANIER</a><a class="share-sec" href="#."><i class="fa fa-heart-o"></i></a> </div>
              </div>
              <!-- SHARE -->
            </div>
          </div>
        </div>
        
        <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe animate fadeInUp" data-wow-delay="0.4s">
          <div class="text-center"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#review" aria-controls="women" role="tab" data-toggle="tab">COMMENTAIRES</a></li>
            </ul>
          </div>
          <!-- Tab panes -->
          <div class="tab-content"> 
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade" id="descr">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectusLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectusLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.<br>
                <br>
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. </p>
            </div>
            <div role="tabpanel" class="tab-pane fade  in active" id="review">
            
            <!-- REVIEW -->
            
              
              <!-- REVIEW PEOPLE 1 -->
              
              
              <!-- ADD REVIEW -->
              <?php
                if(isset($_SESSION['id'])){
              ?>
              <h6>Les commentaires disponible pour mieux savoir le produit</h6>
                
                <!--  Details -->
                
                    <?php 
                    $c = new commentaireC();
                    $commentaires = $c->afficher($ref);
                    foreach ($commentaires as $com) {
                    ?>
                    <?php
                      $pseudo = $c->recuperer($com['id_membre']);
                      foreach ($pseudo as $p) {
                        $P = $p['pseudo'];
                      }
                      ?>
                      <div class="media">
                      <div class="media-left"> 
                        <!--  Image -->
                        <div> <a href="#"> <img class="media-object" src="images/web-user.jpg" style="width: 50px; height: 50px;"> </a> </div>
                      </div>
                      <div class="media-body">
                        <?php
                          if($com['id_membre']==$_SESSION['id']){
                        ?>
                            <form method="POST" action="supprimer_commentaire.php">
                              <input type="hidden" name="id_c" value="<?php echo $com['id_commentaire']; ?>">
                                <span class="pull-right">
                                  <button type="submit" class="pull-right no-margin" style="border: none; background-color: white;">SUPPRIMER</button><p></p>
                                </span>
                            </form>
                        <?php
                          }
                        ?>
                          
                      <p class="font-playfair">“<?php echo $com['commentaire']; ?>
                      ”</p>
                      <h6><?php echo $P; ?><span class="pull-right"><?php echo $com['date_ajout'] ;?></span> </h6>
                      </div>
                    </div>
                    <?php
                  }
                     ?>
                  
              
              <!-- REVIEW PEOPLE 1 -->
                <h6 class="margin-t-40">AJOUTER COMMENTAIRE</h6>
                <form method="POST" action="ajouter_commentaire.php">
                  <input type="text" name="refe" value="<?php echo($ref); ?>" hidden>
                  <ul class="row">
                    <li class="col-sm-6">
                    <li class="col-sm-6">
                    <li class="col-sm-12">
                      <label> *VOTRE COMMENTAIRE
                        <textarea name="commentaire"></textarea>
                      </label>
                    </li>
                    <li class="col-sm-6"> 
                      <!-- Rating Stars -->
                      <div class="stars"> <span>VOTRE AVIS</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </li>
                    <li class="col-sm-6">
                     <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POSTER COMMENTAIRE</button>
                    </li>
                  </ul>
                </form>
              <?php
                }
                else{
              ?>
              <h6 class="margin-t-40">AJOUTER COMMENTAIRE</h6>
                <form  method="POST" action="connexion.php" >
                  <ul class="row">
                    <li class="col-sm-6">
                    <li class="col-sm-6">
                    <li class="col-sm-12">
                      <label> *VOTRE COMMENTAIRE
                        <textarea></textarea>
                      </label>
                    </li>
                    <li class="col-sm-6"> 
                      <!-- Rating Stars -->
                      <div class="stars"> <span>VOTRE AVIS</span> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    </li>
                    <li class="col-sm-6">
                      <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POSTER COMMENTAIRE</button>
                    </li>
                  </ul>
                </form>
              <?php
                }
                ?>
              
            </div>
            
            <!-- TAGS -->
            <div role="tabpanel" class="tab-pane fade" id="tags"> </div>
          </div>
        </div>
      </div>
      
      <!--======= RELATED PRODUCTS =========-->
      <section class="section-p-60px new-arrival new-arri-w-slide">
        <div class="container"> 
          
          <!--  Tittle -->
          <div class="tittle tittle-2 animate fadeInUp" data-wow-delay="0.4s">
            <h5>RELATED PRODUCTS</h5>
            <p class="font-playfair">Most haver in your Shop </p>
          </div>
          
          <!--  New Arrival Tabs Products  -->
          <div class="popurlar_product client-slide animate fadeInUp" data-wow-delay="0.4s"> 
            
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
<script src="js/jquery.flexslider-min.js"></script> <script src="js/jquery.elevatezoom.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/main.js"></script> 
<script>
$(".zoom_05").elevateZoom({ 
	zoomType	: "inner", 
	cursor		: "crosshair"
}); 
</script>
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/02-shop-details-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:19 GMT -->
</html>