<?php
    require '../Core/PanierCore.php' ;
    include_once "../Entities/produit.php";
    include_once "../Entities/image.php";
    include_once "../Entities/categorie.php";
    include_once "../Entities/sous_categorie.php";
    include_once "../Core/produitC.php";
    include_once "../Core/imageC.php";
    include_once "../Core/categorieC.php";
    include_once "../Core/sous_categorieC.php";

    include_once "../Core/commentaireC.php";


    session_start();

    $C = new categorieC();
    $categorie = $C->afficher();
    $Panier=new PanierCore();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/index-11-beauty.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:46:12 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FASHION MAKEUP</title>
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
    <div class="position-center-center"> <img src="images/Logo_FM-Transp_02.png" alt="" style="width: 350px; height: 300px;">
      
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
<div id="wrap" class="beauty"> 
  
  <!-- Header -->
  <header class="header"> 
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="container"> 
        <!-- Language -->
        <div class="language"><a href="#." class="active">FR</a></div>
        <div class="top-links">
          <?php

          if(isset($_SESSION['id'])){
          ?>
            <ul>
              <li><a href="userProfile.php?id=<?php echo $_SESSION['id']; ?>">MON COMPTE</a></li>
              <li class="font-montserrat">DEVISE:
                <select class="selectpicker">
                  <option>DT</option>
                </select>
              </li>
            </ul>
          <?php
          }
          else{
          ?>
            <ul>
              <li><a href="connexion.php">SE CONNECTER</a></li>
              <li class="font-montserrat">DEVISE:
                <select class="selectpicker">
                  <option>DT</option>
                </select>
              </li>
            </ul>
          <?php
          }
          ?>
          <!-- Social Icons -->
          <ul class="social_icons">
            <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
            <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
          </ul>
        </div>
      </div>
    </div>
    
    <!-- Logo -->
    <div class="container" >
      <div class="logo"> <a href="#."><img src="images/Logo_FM-Transp_02.png" alt="" style="width: 350px; height: 300px; "></a> </div>
    </div>
      
      
      <!-- Nav -->
      
      <div class="sticky">
      <div class="container">
      <nav>
        <ul id="ownmenu" class="ownmenu">
          <li class="active"><a href="finalindex.php">ACCUEIL</a>
          </li>
          <li><a href="Produit1.php">PRODUITS</a>
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
          <li><a href="#.">BOUTIQUE</a> 
          <li><a href="#.">PROMOTIONS</a></li>
          
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
  
  <!--======= HOME MAIN SLIDER =========-->
  <section class="home-slider">
    <div class="tp-banner-container">
      <div class="tp-banner" >
        <ul>
          
          <!-- Slider 1 -->
          <li data-transition="fade" data-slotamount="7"> <img src="images/slides/slide-20.jpg" data-bgposition="center top" alt="" />
            
            <!-- Layer -->
            <div class="tp-caption sfb font-playfair no-space tp-resizeme" 
                  data-x="center" 
                  data-y="center"  data-voffset="-20" 
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
                  style="color: #fff; font-size: 80px; font-style:italic;"><!-- text anime --></div>
            
            <!-- Layer -->
            <div class="tp-caption sfb  font-montserrat text-center tp-resizeme" 
                  data-x="center" 
                  data-y="center" data-voffset="40" 
                  data-speed="1500" 
                  data-start="1400" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #fff; font-size: 14px;"><!-- text anime --></div>
            
          </li>
          
          <!-- Slider 2 -->
          
          <li data-transition="random" data-slotamount="7"> <img src="images/slides/sliide.jpg" data-bgposition="center top" alt="" />
            
            <!-- Layer -->
            <div class="tp-caption sfb font-playfair text-center no-space tp-resizeme" 
                  data-x="center" 
                  data-y="center"  data-voffset="0" 
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
                  style="color: #fff font-size: 110px font-style:italic border:1px solid #fff padding:0 50px;"><!-- text anime --><br>
<!-- text anime --></div>
            
            
          </li>
          
          
          <!-- Slider 1 -->
          <li data-transition="random" data-slotamount="7"> <img src="images/slides/slide-22.jpg" data-bgposition="center top" alt="" />
            
            <!-- Layer -->
            <div class="tp-caption sfb  text-uppercase font-montserrat text-left tp-resizeme" 
                  data-x="left" 
                  data-y="center"  data-voffset="-20" 
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
                  style="color: #fff; font-size: 24px;"> <!-- text anime --><br> <!-- text anime --></div>
           
            <!-- Layer -->
            <div class="tp-caption sfb font-montserrat no-space tp-resizeme" 
                  data-x="left" 
                  data-y="center"  data-voffset="40" 
                  data-speed="700" 
                  data-start="1400" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #fff; font-size: 48px; font-weight:bold; font-style:normal;"><!-- text anime --></div> 
            
            <!-- Layer -->
            <div class="tp-caption sfr  font-montserrat text-center tp-resizeme" 
                  data-x="right" 
                  data-y="center" data-voffset="40" 
                  data-speed="700" 
                  data-start="1400" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #fff; font-size: 14px;"> <img src="images/slides/slide-20-1.png" alt="" > <!-- text anime --></div>
            
            <!-- Layer -->
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
            <div class="inn-sec"> <a href="produit_categorie.php?ref_sc=11&f=YEUX"> <img class="img-responsive" src="images/image.jpg" style="min-height: 280px;"> <span>YEUX</span> </a> </div>
          </li>
      
          <!-- Collection Add -->
          <li class="col-sm-3 animate fadeInLeft" data-wow-delay="0.4s">
            <div class="inn-sec"> <a href="produit_categorie.php?ref_sc=13&f=TEINT"> <img class="img-responsive" src="images/add-img-4.jpg" style="min-height: 280px;"> <span>Visage</span> </a> </div>
          </li>

         

          <!-- Collection Add -->
          <li class="col-sm-3 animate fadeInRight" data-wow-delay="0.4s">
            <div class="inn-sec"> <a href="produit_categorie.php?ref_sc=12&f=LEVRES"> <img class="img-responsive" src="images/slide-20.jpg" style="min-height: 280px;"> <span>Levres</span> </a> </div>
          </li>

          <!-- Collection Add -->
          <li class="col-sm-3 animate fadeInRight" data-wow-delay="0.4s">
            <div class="inn-sec"> <a href="produit_categorie.php?ref_sc=14&f=ONGLES"> <img class="img-responsive" src="images/fashionmakeup06.jpg" style="min-height: 280px;"> <span>Ongles</span> </a> </div>
          </li>
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
              <h5>NOUVEAU PRODUITS</h5>
              <p>ACCROCHEZ-VOUS</p>
            </div>
            <div class="product-slides"> 
            <?php 
              $i=0;
              $produitC = new produitC();
              $datePs = $produitC->recupererprodord();
              foreach ($datePs as $key) {
                $imagesC = new imageC();
                $listeimage = $imagesC->recupererimage($key['reference']);
            ?>
              <!-- Slide 1 -->
              <div class="items-in">
               
              <?php  
              foreach ($listeimage as $row) {
              ?>
                <img src="../../admin/Views/production/images/<?php echo $row['chemin'];?>"  alt="" style="max-height: 440px;"> 
              <?php
                break;  
              }
              ?>
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <?php
                    foreach ($listeimage as $row) {
                    ?>
                      <li> <a href="../../admin/Views/production/images/<?php echo $row['chemin'];?>" data-lighter><i class="ion-search"></i></a></li>
                    <?php
                      break;  
                    }
                    ?>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">AJOUTER AU PANIER</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#."><?php echo $key['nom'] ; ?></a> <span class="font-montserrat"><?php echo $key['prix'];?> DT</span> </div>
              </div>
              <?php
                $i++;
                if($i>=3)
                  break;
                }
                ?>
            </div>
          </div>
          
          <!-- Popurlar Product 2 -->
          <div class="col-md-4  animate fadeInUp" data-wow-delay="0.6s"> 
            <!-- Popurlar Tittle -->
            <div class="tittle">
              <h5>PROMOTION</h5>
              <p>DEPECHEZ-VOUS</p>
            </div>
            <!-- Popurlar Slider -->
            <div class="product-slides"> 
              <!-- Slide 1 -->
              <?php 
              $p = $produitC->recup_produit();
              foreach ($p as $key) {
              $im = $imagesC->recupererimage($key['reference']);
            ?>
              <!-- Slide 1 -->
              <div class="items-in">
               
              <?php  
              foreach ($im as $row) {
              ?>
                <img src="../../admin/Views/production/images/<?php echo $row['chemin'];?>"  alt="" style="max-height: 440px;"> 
              <?php
                break;  
              }
              ?>
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <?php
                    foreach ($im as $row) {
                    ?>
                      <li> <a href="../../admin/Views/production/images/<?php echo $row['chemin'];?>" data-lighter><i class="ion-search"></i></a></li>
                    <?php
                      break;  
                    }
                    ?>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">AJOUTER AU PANIER</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#."><?php echo $key['nom'] ; ?></a> <span class="font-montserrat"><?php echo $key['prix'];?> DT</span> </div>
              </div>
              <?php
                }
                ?>
            </div>
          </div>
          <!-- Popurlar Product 1 -->
          <div class="col-md-4  animate fadeInUp" data-wow-delay="0.8s"> 
            <!-- Popurlar Tittke -->
            <div class="tittle">
              <h5>TOP</h5>
              <p>FAVORISES PAR NOS CLIENTS</p>
            </div>
            <!-- Popurlar Slider -->
            <div class="product-slides"> 
              <!-- Slide 1 -->
              <div class="items-in"> 
                <!-- Image --> 
                <img src="../../admin/Views/production/images/FMU1400206 N°0206.jpg" alt="" style="max-height: 440px;"> 
                <!-- Hover Details -->
                <div class="over-item">
                  <ul class="animated fadeIn">
                    <li> <a href="../../admin/Views/production/images/FMU1400206 N°0206.jpg" data-lighter><i class="ion-search"></i></a></li>
                    <li> <a href="#."><i class="ion-shuffle"></i></a></li>
                    <li> <a href="#."><i class="fa fa-heart-o"></i></a></li>
                    <li class="full-w"> <a href="#." class="btn">AJOUTER AU PANIER</a></li>
                  </ul>
                </div>
                <!-- Item Name -->
                <div class="details-sec"> <a href="#.">VERNIS</a> <span class="font-montserrat">15 DT</span> </div>
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
          <li class="col-sm-6 animate fadeInLeft" data-wow-delay="0.4s"> <a href="#."><img src="images/fashionmakeup17.jpg" alt=""></a></li>
          <li class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s"> <a href="#."><img src="images/fashionmakeup14.jpg" style="height: 364px;" alt=""></a></li>
      </div>
    </section>
    
    
    
    <!--======= Benefits =========-->
    <section class="benefits">
      <ul class="row">
        
        <!--  FREE SHIPPING -->
        <li class="col-md-3 no-padding animate fadeInLeft" data-wow-delay="0.4s">
          <div class="benefit-item odd"> <i class="fa fa-paper-plane-o"></i>
            <h5>LIVRAISON GRATUITE</h5>
            <span>nous avons couvert tout le pays</span> </div>
        </li>
        
        <!--  Money Back -->
        <li class="col-md-3 no-padding animate fadeInRight" data-wow-delay="0.8s">
          <div class="benefit-item even"> <i class="fa fa-usd"></i>
            <h5>SATISFAIT OU REMBOURSE</h5>
            <span>100% remboursé  -30jours</span> </div>
        </li>
        
        <!--  Best Support -->
        <li class="col-md-3 no-padding animate fadeInRight" data-wow-delay="0.4s">
          <div class="benefit-item odd"> <i class="fa fa-whatsapp"></i>
            <h5>Meilleur Support</h5>
            <span>rapide &amp; 24/7</span> </div>
        </li>
        
        <!--  Gift Card -->
        <li class="col-md-3 no-padding animate fadeInRight" data-wow-delay="0.8s">
          <div class="benefit-item even"> <i class="fa fa-gift"></i>
            <h5>POINT FIDELITE</h5>
            <span>promotion pour nos clients fideles</span> </div>
        </li>
      </ul>
    </section>
    
    <section class="about-sebian bg-1" data-stellar-background-ratio="0.9">
      <div class="section-p-60px overlay">
        <div class="container"> 
          
          <!--  Tittle -->
          <div class="tittle white animate fadeInUp" data-wow-delay="0.4s">
            <h5>QUI SOMME NOUS ?</h5>
            <p>text</p>
          </div>
          
          <!--  Intro Text  -->
          <div class="text-center animate fadeInUp" data-wow-delay="0.4s">
            <p class="intro-small text-center">text text text text text texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext texttext text</p>
            <a href="#." class="btn btn-small">SAVOIR PLUS</a> </div>
          <div class="clients-about-in"> 
            
            <!--  Tittle -->
            <div class="tittle white animate fadeInUp" data-wow-delay="0.4s">
              <h5>QUE DISENT NOS CLIENTS</h5>
              <p>Meilleur Commentaires</p>
            </div>
            
            <!--  What People Says -->
            

              <?php
              $i=0;
                $c = new commentaireC();
                $commentaires = $c->afficher1();
                foreach ($commentaires as $key) {
                  $pseudo = $c->recuperer($key['id_membre']);
                  foreach ($pseudo as $p) {
                    $P = $p['pseudo'];
                    
              ?>
              <div class="clients-about-slider animate fadeInUp" data-wow-delay="0.4s"> 
                        <!--  Slide 1 -->
                    <div class="media">
                      <div class="media-left"> 
                        <!--  Avatar -->
                        <div class="avatar"> <img class="media-object" src="images/avatar-1.jpg" alt=""> </div>
                      </div>
                      <!--  Text -->
                      <div class="media-body">
                        <p>“<?php echo $key['commentaire']; ?>”</p>
                        <hr>
                        <h6><?php echo $P; ?></h6>
                    </div>
              </div>
              <?php
                  break;
                  }
                  $i++;
                  if($i>0)
                    break;
                }
                ?>
              
              
              
            
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Popurlar Product =========-->
    <section class="section-p-60px blog">
      <div class="container"> 
        <!--  Tittle -->
        <div class="tittle animate fadeInUp" data-wow-delay="0.4s">
          <!--<h5>THE BLOG</h5>
          <p>Tell your Story</p>-->
        </div>
        
        <!--  Blog Posts -->
        <div class="blog-posts">
          <ul class="row">
            <!--  Posts 1 -->
            <li class="col-sm-6 animate fadeInLeft" data-wow-delay="0.4s"> 
              <!--  Image --> 
              <img class="img-responsive" src="images/beauty/blog-1.jpg" alt=""> <span class="tags">NOUVELLES DE MODE</span> <a href="#." class="tittle-post font-playfair">TITRE</a>
              <p>text text text text text text text text text </p>
              <!--  Post Info -->
              <ul class="info">
                <li><i class="fa fa-user"></i> admin</li>
                <li><i class="fa fa-calendar-o"></i> 12 JULY</li>
                <li><i class="fa fa-eye"></i> 325</li>
              </ul>
            </li>
            
            <!--  Posts 2 -->
            <li class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s"> 
              <!--  Image --> 
              <img class="img-responsive" src="images/beauty/blog-2.jpg" alt=""> <span class="tags">NOUVELLES DE MODE</span> <a href="#." class="tittle-post font-playfair">TITRE</a>
              <p>text text text text text text text text text</p>
              <!--  Post Info -->
              <ul class="info">
                <li><i class="fa fa-user"></i> admin</li>
                <li><i class="fa fa-calendar-o"></i> 10 DECEMBER</li>
                <li><i class="fa fa-eye"></i> 250</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!--======= Core Feature =========-->
    <section class="section-p-60px core-feature no-padding-b">
      
      
      <!--  Core Container Fluid -->
      <div class="container-fluid">
        <ul class="row">
          <!--  Core Images -->
          <li class="col-md-6 no-padding animate fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="images/beauty/core-img.jpg" alt=""> </li>
          
          <!--  Core Text -->
          <li class="col-md-6 no-padding animate fadeInRight" data-wow-delay="0.4s">
            <div class="core-in"> 
              <!--  Feature -->
              <div class="media">
                <div class="media-left"> 
                  <!--  Avatar -->
                  <div class="icon-feature">
                    <div class="media-object"><i class="fa fa-diamond"></i> </div>
                  </div>
                </div>
                <!--  Text -->
                <div class="media-body">
                  <h6>CHARTE GRAPHIQUE UNIQUE</h6>
                  <p>description description description description description/p>
                </div>
              </div>
              
              <!--  Feature -->
              <div class="media">
                <div class="media-left"> 
                  <!--  Avatar -->
                  <div class="icon-feature">
                    <div class="media-object"><i class="fa fa-mobile"></i> </div>
                  </div>
                </div>
                <!--  Text -->
                <div class="media-body">
                  <h6>PRET A REPONDRE</h6>
                  <p>description description description description description</p>
                </div>
              </div>
              
              <!--  Feature -->
              <div class="media">
                <div class="media-left"> 
                  <!--  Avatar -->
                  <div class="icon-feature">
                    <div class="media-object"><i class="fa fa-whatsapp"></i> </div>
                  </div>
                </div>
                <!--  Text -->
                <div class="media-body">
                  <h6>SUPPORT 24/7</h6>
                  <p>description description description description</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    
    <!--======= Core Feature =========-->
    <section class="section-p-60px our-clients">
      <div class="container"> 
        <!--  Tittle -->
        <div class="tittle animate fadeInUp" data-wow-delay="0.4s">
          <h5>NOS CLIENTS</h5>
          <p>contactez nous si vous avez des questions</p>
        </div>
        
        <!--  Text Intro -->
        <p class="font-montserrat intro text-center animate fadeInUp" data-wow-delay="0.4s ">text text text text text text text text text text text texte t.</p>
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
                <button type="submit">S'inscrire</button>
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
      <div class="text-center"> <a href="#."><img src="images/Logo_FM-Transp.png" alt="" style="width: 350px; height: 300px;"></a><br>
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
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.isotope.min.js"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/main.js"></script>
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/index-11-beauty.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:46:27 GMT -->
</html>