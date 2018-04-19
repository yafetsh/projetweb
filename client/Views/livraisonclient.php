<?php  
  include_once "../Core/livraisoncore.php";
  include_once "../Entities/livraison.php";


  $livraisonC=new livraisoncore();
  $listeLivraisons=$livraisonC->afficherLivraisons();
  $lC=new livraisoncore();
  if(isset($_GET['supprimer'])){
    $lC->supprimerlivraison($_GET["id"]);
    header("Location: livraisonclient.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:01 GMT -->

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

        <!-- Header -->
        <header class="header-style-2">
            <!-- Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <!-- Language -->
                    <div class="top-links">

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

            <div class="w3-bar w3-border w3-light-grey">
            <div style="float: right">
            <a href="#" class="w3-bar-item w3-button w3-border-right" class="top-links">ACCEUIL</a>
            <a href="#" class="w3-bar-item w3-button w3-border-right"class="top-links">EDITER MON PROFIL</a>
            <a href="#" class="w3-bar-item w3-button w3-border-right"class="top-links">PANIER</a>
            <a href="#" class="w3-bar-item w3-button w3-border-right"class="top-links">DÉCONNEXION</a>
           </div>
          </div>

            <!-- Logo -->
            <div class="container">
                <div class="logo"> <a href="#."><img src="images/fashionmakeup.png" alt=""></a> </div>
            </div>

            <!-- Nav -->
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
        <!-- Header End -->
        <!--======= SUB BANNER =========-->

        <!-- CONTENT START -->

            <!-- Map -->

            <!--======= khedma =========-->

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h6>Aller à :</h6>
                    <div style="padding:35px" ><a href="reservationclient.php"><u>Réservation</u></a>
                     <a href="#"> <u>Réclamation</u></a>
                     <a href="#"><u> Promotion</u></a></h5></div>
            </div>


                  <div >
                    <h6>Livraisons</h6>
                  </div>
                  Liste des livraisons
                  <div >

                      <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                          	<th>Rue</th>
                          	<th>Numero de telephone</th>
                          	<th>Region</th>
                          	<th>Ville</th>
                          	<th>Etat</th>
                            <th>Date du passage de la commande</th>
                          	<th>Action</th>
                           </tr>
                      	</thead>
                      <tbody>
                        <?PHP
                        foreach($listeLivraisons as $row){
                          ?>
                          <tr>
                          <td><?PHP echo $row['rue']; ?></td>
                          <td><?PHP echo $row['numero']; ?></td>
                          <td><?PHP echo $row['region']; ?></td>
                          <td><?PHP echo $row['ville']; ?></td>
                          <td><?PHP echo $row['etat']; ?></td>
                          <td><?PHP echo $row['date']; ?></td>
                          <td>
                          	 <?PHP echo '<a  href="modifierlivraison.php?id='.$row['id'].'">Modifier</a>'; ?>
                          	<form method="GET">
                                <input type="submit" name="supprimer" value="Supprimer">
                                <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                            </form>
                            <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
p {
  text-align: center;
  font-size: 15px;
  margin-top:0px;
}
</style>
</head>
<body>

<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $row['date']; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance =  now-countDownDate ;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    
    // If the count down is over, write some text 
    if (distance >1000*60*60*2) {

        clearInterval(x);
        document.getElementById("demo").innerHTML = "Désolé,le temps de modification ou de suppression de la commande est expriré";
    }
}, 1000);
</script>

                          </td>
                          </tr>
<?PHP
}
?>
                      </tbody>
                  </table>
             
              </div>

        <!--======= Footer =========-->
        <footer>
            <div class="container ">
                <div class="text-center "> <a href="#. "><img src="images/fashionmakeup_dark.png " alt=" "></a><br>
                    <p class="intro-small margin-t-40 ">La marque Française de cosmétique FASHION MAKE-UP est née en 2005 Présente depuis bientôt 10 ans, nous avons su nous imposer comme un des leader du secteur avec une gamme contemporaine et des produits de grande qualité , le tout allié a des prix compétitifs Fort d’un réseau de plus de 1000 points de ventes en Europe, dont de grandes enseignes en France .

                    </p>
                </div>

                <!--  Footer Links -->
                <div class="footer-link row ">
                    <div class="col-md-6 ">
                        <ul>

                            <!--  INFOMATION -->
                            <li class="col-sm-6 ">
                                <h5>INFOMATION</h5>
                                <ul class="f-links ">
                                    <li><a href="#. ">ABOUT US</a></li>
                                    <li><a href="#. "> DELIVERY INFOMATION</a></li>
                                    <li><a href="#. "> PRIVACY & POLICY</a></li>
                                    <li><a href="#. "> TEMRS & CONDITIONS</a></li>
                                    <li><a href="#. "> MANUFACTURES</a></li>
                                </ul>
                            </li>

                            <!-- MY ACCOUNT -->
                            <li class="col-sm-6 ">
                                <h5>MY ACCOUNT</h5>
                                <ul class="f-links ">
                                    <li><a href="#. ">MY ACCOUNT</a></li>
                                    <li><a href="#. "> LOGIN</a></li>
                                    <li><a href="#. "> MY CART</a></li>
                                    <li><a href="#. "> WISHLIST</a></li>
                                    <li><a href="#. "> CHECKOUT</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- Second Row -->
                    <div class="col-md-6 ">
                        <ul class="row ">

                            <!-- TWITTER -->
                            <li class="col-sm-6 ">
                                <h5>TWITTER</h5>
                                <p>Check out new work on my @Behance portfolio: "BCreative_Multipurpose Theme " http://on.be.net/1zOOfBQ </p>
                            </li>

                            <!-- FLICKR PHOTO -->
                            <li class="col-sm-6 ">
                                <h5>FLICKR PHOTO</h5>
                                <ul class="flicker ">
                                    <li><a href="#. "><img src="images/flicker-1.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-2.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-3.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-4.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-5.jpg " alt=" "></a></li>
                                    <li><a href="#. "><img src="images/flicker-6.jpg " alt=" "></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Rights -->
                <div class="rights ">
                    <p>© 2018 ARTVISION</p>
                </div>
            </div>
        </footer>
        <!-- GO TO TOP -->
        <a href="# " class="cd-top "><i class="fa fa-angle-up "></i></a>
        <!-- GO TO TOP End -->
        </div>
        <!-- Wrap End -->
        <script src="js/jquery-1.11.3.js "></script>
        <script src="js/wow.min.js "></script>
        <script src="js/bootstrap.min.js "></script>
        <script src="js/own-menu.js "></script>
        <script src="js/owl.carousel.min.js "></script>
        <script src="js/jquery.magnific-popup.min.js "></script>
        <script src="js/jquery.isotope.min.js "></script>
        <script src="js/jquery.flexslider-min.js "></script>


        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript " src="rs-plugin/js/jquery.themepunch.tools.min.js "></script>
        <script type="text/javascript " src="rs-plugin/js/jquery.themepunch.revolution.min.js "></script>
        <script src="js/main.js "></script>
        <!-- begin map script-->
        <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
        <script type="text/javascript ">
            /*==========  Map  ==========*/
            var map;

            function initialize_map() {
                if ($('#map').length) {
                    var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
                    var mapOptions = {
                        zoom: 17,
                        center: myLatLng,
                        scrollwheel: false,
                        panControl: false,
                        zoomControl: true,
                        scaleControl: false,
                        mapTypeControl: false,
                        streetViewControl: false
                    };
                    map = new google.maps.Map(document.getElementById('map'), mapOptions);
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        tittle: 'Envato',
                        icon: './images/map-locator.png'
                    });
                } else {
                    return false;
                }
            }
            google.maps.event.addDomListener(window, 'load', initialize_map);

        </script>
</body>

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/04-contact-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:48:02 GMT -->

</html>
