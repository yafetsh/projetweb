<?php

session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/09-01-portfolio-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>votre profil Fashion Makeup</title>
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
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

<body style="background-color: #272727">
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

<!-- navbar -->
  <div class="w3-bar w3-border w3-light-grey">
  <div style="float: right">
  <a href="#" class="w3-bar-item w3-button w3-border-right" class="btn">ACCEUIL</a>
  <a href="edit.php" class="w3-bar-item w3-button w3-border-right">EDITER MON PROFIL</a>
  <a href="#" class="w3-bar-item w3-button w3-border-right">PANIER</a>
  <a href="disconnect.php" class="w3-bar-item w3-button w3-border-right">DÉCONNEXION</a>
 </div>
</div>

<!-- navbar -->
   
<div style="background-color: #272727">
    <!--======== profile content =======-->

    <div class="profile-card">
        <div class="profile-cover">
            <div class="menu-container">
                <a class="list-icon" title="Expand" href="javascript:void(0);"></a>
                <ul class="profile-actions" style="display: none;">
                    <li><a href="#">Follow</a></li>
                    <li><a href="#">Add as Friend</a></li>
                    <li><a href="#">Like</a></li>
                </ul>
            </div>
            <div class="profile-avatar">
                <div class="btns-container">
                    <div class="profile-links">
                        <a class="zoom-avatar" href="#"><img src="https://dl.dropboxusercontent.com/s/5liaxzvwbfuqzpo/zoom.png"></a>
                        <a class="read-more" href="#"><img src="https://dl.dropboxusercontent.com/s/62dfoo9h44o58lw/more.png"></a>
                        <a class="view-map" href="#"><img src="https://dl.dropboxusercontent.com/s/9ofmihok0h64lvn/location.png"></a>
                    </div>
                </div>
                <a href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEc9w-2Fonsy-e_W7-7XAAwoSS5gSdkQ8XeXF72zCnejmlRMtl" alt="Anis M" /></a>
            </div>
            <div class="profile-details">
                <h1 style="color: white"><?php echo $userinfo['pseudo']; ?></h1>
                <h6 style="color: white"><?php echo $userinfo['mail']; ?></h6>
            </div>
        </div>
        <div class="profile-info" style="display: none;">
            <h1>About Me</h1>
            <div class="info-area">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.Stet clita kasd gubergren, no sea takimata sanctus est.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
            </div>
            <div class="clear"></div>
        </div>
        <div class="profile-map" style="display: none;">
            <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Saveology+New+York&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=40.052282,86.572266&amp;t=h&amp;ie=UTF8&amp;hq=Saveology&amp;hnear=New+York&amp;ll=40.552027,-74.420902&amp;spn=0.357117,0.912844&amp;iwloc=near&amp;output=embed"></iframe>
            <div class="clear"></div>
        </div>
        <div class="profile-content" style="float: none">
            <ul>
                <li></li>
                <li></li>

                <li></li>

                <li></li>

                <li></li>


                <li>
                    <div class="digits">83</div>
                    Followers
                </li>
                <li>
                    <div class="digits">1507</div>
                    achats
                </li>
                <li>
                    <div class="digits">234</div>
                    amis
                </li>
                <li>
                    <div class="digits">51</div>
                    Likes
                </li>
                <li>
                    <div class="digits">42</div>
                    points de fidélité
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>

    <!-- profile --->    
</div>




    <!--======= Footer =========-->
    <footer>
        <div class="container">
        

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
                            <h5>À PROPOS</h5>
                            <p>vendeur agrée par Fashion Makeup Tunis depuis 2016</p>
                            <p>Client  PREMIUM Chez Famous Trading</p>
                        </li>

                        <!-- FLICKR PHOTO -->
                        <li class="col-sm-6">
                            <h5>DERNIERS ACHATS</h5>
                            <ul class="flicker">
                                <li><a href="#."><img src="http://www.mirenesse.com/108978-thickbox_default/starter-kit-no-makeup-look-smooth-nude-4pce-collection.jpg" alt=""></a></li>
                                <li><a href="#."><img src="https://guideimg.alibaba.com/images/shop/2015/07/27/7/shany-carry-all-trunk-professional-makeup-kit-eyeshadow-pedicure-manicure-with-black-trim-clear-case_6704107.jpeg" alt=""></a></li>
                                <li><a href="#."><img src="http://stat.homeshop18.com/homeshop18/images/productImages/731/adbeni-fashion-color-combo-makeup-sets-with-lipstick-rubber-band-large_dc745a05ecee3a3f4fa231e80c89bea9.jpg" alt=""></a></li>
                                <li><a href="#."><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQze8GYP-x2oyXPOyEgw9UhQmQ6SNJ_dMv72cTe-ExkJXryQr5I" alt=""></a></li>
                                <li><a href="#."><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0e4q2oNPwuwCArYFCUHstWVQBaxUzG9IQVvgsPh5Ydqr34DSwCg" alt=""></a></li>
                                <li><a href="#."><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7wSw6cSyLQfPxcRhQVIUoET-4H4PLqex3dP40tMCyVXH_NOV8" alt=""></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Rights -->
            <div class="rights">
                <p>© FASHION MAKEUP 2018 POWERED BY ARTIVISION TEAM</p>
            </div>
        </div>
    </footer>

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

<!-- Mirrored from uouapps.a2hosted.com/dhani-html/html/sebian-intro/sebian/09-01-portfolio-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Feb 2017 13:47:25 GMT -->

</html>
