<?php
include "../core/utilisateurCore.php";

session_start();
$bdd = config::getConnexion();

if(isset($_POST['recup_submit'],$_POST['recup_mail'])) {
   if(!empty($_POST['recup_mail'])) {
      $recup_mail = htmlspecialchars($_POST['recup_mail']);
      if(filter_var($recup_mail,FILTER_VALIDATE_EMAIL)) {
         $mailexist = $bdd->prepare('SELECT id,pseudo FROM membre WHERE mail = ?');
         $mailexist->execute(array($recup_mail));
         $mailexist_count = $mailexist->rowCount();
         if($mailexist_count == 1) {
            $pseudo = $mailexist->fetch();
            $pseudo = $pseudo['pseudo'];
            
            $recup_code = "";
            for($i=0; $i < 8; $i++) { 
               $recup_code .= mt_rand(0,9);
            }
            $mail_recup_exist = $bdd->prepare('SELECT id FROM recuperation WHERE mail = ?');
            $mail_recup_exist->execute(array($recup_mail));
            $mail_recup_exist = $mail_recup_exist->rowCount();
            if($mail_recup_exist == 1) {
               $recup_insert = $bdd->prepare('UPDATE recuperation SET code = ? WHERE mail = ?');
               $recup_insert->execute(array($recup_code,$recup_mail));
            } else {
               $recup_insert = $bdd->prepare('INSERT INTO recuperation(mail,code) VALUES (?, ?)');
               $recup_insert->execute(array($recup_mail,$recup_code));
            }
        //appel de foncton de mail  
        $utilisateur1C = new utilisateurCore();
         $utilisateur1C->RecupererMail($pseudo,$recup_code,$recup_mail);

                     $_SESSION['recup_mail'] = $recup_mail;

         } else {
            $error = "Cette adresse mail n'est pas enregistrée";
         }
      } else {
         $error = "Adresse mail invalide";
      }
   } else {
      $error = "Veuillez entrer votre adresse mail";
   }
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>mot de passe oubliée</title>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Default Description" />
    <meta name="keywords" content="Magento, Varien, E-commerce" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="icon" href="http://sebian.demo.arw.tf/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="http://sebian.demo.arw.tf/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'http://sebian.demo.arw.tf/js/blank.html';
    var BLANK_IMG = 'http://sebian.demo.arw.tf/js/spacer.gif';
//]]>
</script>
<![endif]-->
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/widgets.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/bootstrap/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/bootstrap-select/css/bootstrap-select.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/fancybox/css/jquery.fancybox.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/icomoon/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/font-awesome/font-awesome.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/owl-carousel/assets/owl.carousel.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/slick/css/slick.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/arw-styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/arw-custom-class.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/arw-extension.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/arw-responsive.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/arw/sebian/css/_config/design_cosmetic_en.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/custom.css" media="all" />
    <link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/print.css" media="print" />
    <!-- FONTS ONLINE -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/prototype/prototype.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/lib/ccard.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/prototype/validation.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/scriptaculous/builder.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/scriptaculous/effects.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/scriptaculous/dragdrop.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/scriptaculous/controls.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/scriptaculous/slider.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/varien/js.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/varien/form.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/varien/menu.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/mage/translate.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/mage/cookies.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/varien/product.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/arw/ajaxcart/configurable.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/arw/arexworks/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/arw/arexworks/jquery/jquery.noconflict.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/arw/arexworks/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/arw/arexworks/jquery/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/js/mage/captcha.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/imagesloaded.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/configurableswatches/modernizr.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/configurableswatches/product-media.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/configurableswatches/swatches-list.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/theme.1.9.1.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/base/default/js/bundle.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/arw/ajaxcart/ajaxcart.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/arw/producttab/js/tab.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/skrollr/skrollr.min.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/skrollr/skrollr.menu.min.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/fancybox/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/slick/js/slick.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/jcountdown/js/jquery.jcountdown.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/vendors/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/theme.js"></script>
    <link href="http://sebian.demo.arw.tf/cosmetic/blog/rss/index/store_id/2/" title="Blog" rel="alternate" type="application/rss+xml" />
    <!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/css/styles-ie.css" media="all" />
<![endif]-->
    <!--[if lt IE 7]>
<script type="text/javascript" src="http://sebian.demo.arw.tf/js/lib/ds-sleight.js"></script>
<script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/base/default/js/ie6.js"></script>
<![endif]-->
    <!--[if lt IE 9]>
<script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/html5shiv.min.js"></script>
<script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/html5shiv-printshiv.min.js"></script>
<script type="text/javascript" src="http://sebian.demo.arw.tf/skin/frontend/arw_sebian/default/js/respond.min.js"></script>
<![endif]-->

    <script type="text/javascript">
        //<![CDATA[
        Mage.Cookies.path = '/cosmetic';
        Mage.Cookies.domain = '.sebian.demo.arw.tf';
        //]]>
    </script>

    <script type="text/javascript">
        //<![CDATA[
        optionalZipCountries = ["HK", "IE", "MO", "PA"];
        //]]>
    </script>
    <!-- BEGIN GOOGLE ANALYTICS CODE -->
    <script type="text/javascript">
        //<![CDATA[
        var _gaq = _gaq || [];

        _gaq.push(['_setAccount', 'UA-46749110-8']);

        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        //]]>
    </script>
    <!-- END GOOGLE ANALYTICS CODE -->
    <script type="text/javascript">
        //<![CDATA[
        var Translator = new Translate([]);
        //]]>
    </script>
    <script type="text/javascript">
        var grid_equal_height = true;
    </script>
    <link href='//fonts.googleapis.com/css?family=Montserrat:100italic,100,200italic,200,300italic,300,400,400italic,500italic,500,600,600italic,700,700italic,800italic,800,900,900italic&amp;subset=all' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:100italic,100,200italic,200,300italic,300,400,400italic,500italic,500,600,600italic,700,700italic,800italic,800,900,900italic&subset=all' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Playfair+Display:100italic,100,200italic,200,300italic,300,400,400italic,500italic,500,600,600italic,700,700italic,800italic,800,900,900italic&subset=all' rel='stylesheet' type='text/css' />
</head>

<body class=" customer-account-forgotpassword sidebar-mobile-show body-stretched">
    <!-- navigation BOF -->
    <div class="arw-mobile-menu">
        <div class="arw-mobile-menu-header">
            <span class="arw-mobile-menu-title">
            <i class="fa fa-bars"></i><span>Menu</span>
            </span>
            <span class="arw-close-canvas"><i class="fa fa-close"></i></span>
        </div>
        <div class="sidebar-menu">
            <ul id="arw_accordionmenu_428256968" class="nav-accordion nav-mobile-accordion">
                <li><a href="http://sebian.demo.arw.tf/cosmetic/"><span>Home</span></a></li>
                <li class=" level0 nav-4 level-top first menu-style-group parent">
                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up.html" class="level-top">
<span>Make Up</span>
</a>
                    <ul class="level0">
                        <li class="child-2-cols level1 item classic nav-4-1 first parent">
                            <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face.html">
<span>Face</span>
</a>
                            <ul class="level1">
                                <li class=" level2 nav-4-1-1 first">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/face-primer.html">
<span>Face Primer</span>
</a>
                                </li>
                                <li class=" level2 nav-4-1-2">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/face-powder.html">
<span>Face Powder</span>
</a>
                                </li>
                                <li class=" level2 nav-4-1-3">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/concealer.html">
<span>Concealer</span>
</a>
                                </li>
                                <li class=" level2 nav-4-1-4">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/blush.html">
<span>Blush</span>
</a>
                                </li>
                                <li class=" level2 nav-4-1-5">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/contour.html">
<span>Contour</span>
</a>
                                </li>
                                <li class=" level2 nav-4-1-6">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/bronzer.html">
<span>Bronzer</span>
</a>
                                </li>
                                <li class=" level2 nav-4-1-7">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/luminizer.html">
<span>Luminizer</span>
</a>
                                </li>
                                <li class=" level2 nav-4-1-8 last">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/face/tinted.html">
<span>Tinted</span>
</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" level1 item classic nav-4-2 parent">
                            <a href="http://sebian.demo.arw.tf/cosmetic/make-up/eye.html">
<span>Eye</span>
</a>
                            <ul class="level1">
                                <li class=" level2 nav-4-2-9 first">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/eye/eyeshadow-palettes-eye-sets.html">
<span>Eyeshadow Palettes &amp; Eye Sets</span>
</a>
                                </li>
                                <li class=" level2 nav-4-2-10">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/eye/eyeshadow-primer-base.html">
<span>Eyeshadow Primer &amp; Base</span>
</a>
                                </li>
                                <li class=" level2 nav-4-2-11">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/eye/under-eye-concealer.html">
<span>Under Eye Concealer</span>
</a>
                                </li>
                                <li class=" level2 nav-4-2-12">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/eye/eyelash-enhancers-primers.html">
<span>Eyelash Enhancers &amp; Primers</span>
</a>
                                </li>
                                <li class=" level2 nav-4-2-13 last">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/eye/eye-makeup-remover.html">
<span>Eye Makeup Remover</span>
</a>
                                </li>
                            </ul>
                        </li>
                        <li class="child-2-cols level1 item classic nav-4-3 last parent">
                            <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips.html">
<span>Lips</span>
</a>
                            <ul class="level1">
                                <li class=" level2 nav-4-3-14 first">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lip-sets.html">
<span>Lip Sets</span>
</a>
                                </li>
                                <li class=" level2 nav-4-3-15">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lipstick.html">
<span>Lipstick</span>
</a>
                                </li>
                                <li class=" level2 nav-4-3-16">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lip-gloss.html">
<span>Lip Gloss</span>
</a>
                                </li>
                                <li class=" level2 nav-4-3-17">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lip-plumper.html">
<span>Lip Plumper</span>
</a>
                                </li>
                                <li class=" level2 nav-4-3-18">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lip-stain.html">
<span>Lip Stain</span>
</a>
                                </li>
                                <li class=" level2 nav-4-3-19">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lip-liner.html">
<span>Lip Liner</span>
</a>
                                </li>
                                <li class=" level2 nav-4-3-20">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lip-balm-treatments.html">
<span>Lip Balm &amp; Treatments</span>
</a>
                                </li>
                                <li class=" level2 nav-4-3-21 last">
                                    <a href="http://sebian.demo.arw.tf/cosmetic/make-up/lips/lip-brushes.html">
<span>Lip Brushes</span>
</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" level0 nav-5 level-top menu-style-group parent">
                    <a href="http://sebian.demo.arw.tf/cosmetic/skin-care.html" class="level-top">
<span>Skin Care</span>
</a>
                    <ul class="level0">
                        <li class=" level1 item classic nav-5-1 first">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/cleanse.html">
<span>Cleanse</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-5-2">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/moisturize.html">
<span>Moisturize</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-5-3">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/treat.html">
<span>Treat</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-5-4">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/masks.html">
<span>Masks</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-5-5">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/sun-protection.html">
<span>Sun Protection</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-5-6">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/self-tanning.html">
<span>Self-Tanning</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-5-7">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/sunscreen.html">
<span>Sunscreen</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-5-8 last">
                            <a href="http://sebian.demo.arw.tf/cosmetic/skin-care/others.html">
<span>Others</span>
</a>
                        </li>
                    </ul>
                </li>
                <li class=" level0 nav-6 level-top m-dropdown menu-style-dropdown last parent">
                    <a href="http://sebian.demo.arw.tf/cosmetic/others.html" class="level-top">
<span>Others</span>
</a>
                    <ul class="level0">
                        <li class=" level1 item classic nav-6-1 first">
                            <a href="http://sebian.demo.arw.tf/cosmetic/others/fragrance.html">
<span>Fragrance</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-6-2">
                            <a href="http://sebian.demo.arw.tf/cosmetic/others/bath-body.html">
<span>Bath &amp; Body</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-6-3">
                            <a href="http://sebian.demo.arw.tf/cosmetic/others/nails.html">
<span>Nails</span>
</a>
                        </li>
                        <li class=" level1 item classic nav-6-4 last">
                            <a href="http://sebian.demo.arw.tf/cosmetic/others/hair.html">
<span>Hair</span>
</a>
                        </li>
                    </ul>
                </li>
                <li class="level0 level-top cms-static-page  ">
                    <a href="http://sebian.demo.arw.tf/cosmetic/about-us" class="level-top">
                                <span>About Us</span>
                            </a>
                </li>
                <li class="level0 level-top cms-static-page  ">
                    <a href="http://sebian.demo.arw.tf/cosmetic/brands" class="level-top">
                                <span>Brands</span>
                            </a>
                </li>
            </ul>
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery("#arw_accordionmenu_428256968").arwAccordionMenu({
                        accordion: true,
                        speed: 400,
                        closedSign: 'collapse',
                        openedSign: 'expand',
                        mouseType: 0,
                        easing: 'easeInOutQuad'
                    });
                });
            </script>
        </div>
    </div>
    <div class="site-overlay"></div>
    <script type="text/javascript">
        //<![CDATA[
        var ajaxCartObj = new ajaxCart({
            "send_url": "http:\/\/sebian.demo.arw.tf\/cosmetic\/ajaxcart\/ajax\/index\/",
            "update_url": "http:\/\/sebian.demo.arw.tf\/cosmetic\/checkout\/cart\/updatePost\/",
            "src_image_progress": "http:\/\/sebian.demo.arw.tf\/skin\/frontend\/arw_sebian\/default\/images\/loading.gif",
            "error": " \u2191 This is a required field.",
            "is_product_view": 0
        });
        //]]>
    </script>
    <script type="text/javascript">
        //<![CDATA[
        document.observe("dom:loaded", function() {
            var Slide = new tabSlide({
                "url": "http:\/\/sebian.demo.arw.tf\/cosmetic\/producttab\/producttab\/product\/",
                "effect": "slide",
                "duration": "1",
                "from": "0",
                "to": "100",
                "direction": "true",
                "identifier": null,
                "icon": "http:\/\/sebian.demo.arw.tf\/media\/arw\/producttab\/ajax\/ajax-loader.gif",
                "is_product_view_tab": 0
            });
            Slide.run();
        });
        //]]
    </script>
    <div class="wrapper">
        <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br />
                    You must have JavaScript enabled in your browser to utilize the functionality of this website.                </p>
            </div>
        </div>
    </noscript>
        <div class="page">
            <header class="header-container header_style_1 header_fixed_menu">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="header-top-left col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            </div>
                            <div class="header-top-right col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <div class="header-top-right-inner">
                                    <div class="header-top-link">
                                        <ul class="header-top-link-ul">
                                            <li>
                                                <span>My Account</span>
                                                <ul class="links">
                                                    <li class="first"><a href="http://sebian.demo.arw.tf/cosmetic/customer/account/" title="My Account">My Account</a></li>
                                                    <li><a href="http://sebian.demo.arw.tf/cosmetic/wishlist/" title="My Wishlist">My Wishlist</a></li>
                                                    <li><a href="http://sebian.demo.arw.tf/cosmetic/checkout/cart/" title="My Cart" class="top-link-cart">My Cart</a></li>
                                                    <li><a href="http://sebian.demo.arw.tf/cosmetic/checkout/" title="Checkout" class="top-link-checkout">Checkout</a></li>
                                                    <li class=" last"><a href="http://sebian.demo.arw.tf/cosmetic/customer/account/login/" title="Log In">Log In</a></li>
                                                </ul>
                                            </li>
                                            <li class="header-dropdown-currency">
                                                <span>Currency<span>USD</span></span>
                                                <ul class="links">
                                                    <li>
                                                        <a href="http://sebian.demo.arw.tf/cosmetic/directory/currency/switch/currency/GBP/uenc/aHR0cDovL3NlYmlhbi5kZW1vLmFydy50Zi9jb3NtZXRpYy9jdXN0b21lci9hY2NvdW50L2ZvcmdvdHBhc3N3b3JkLw,,/">GBP</a>
                                                    </li>
                                                    <li>
                                                        <a href="http://sebian.demo.arw.tf/cosmetic/directory/currency/switch/currency/EUR/uenc/aHR0cDovL3NlYmlhbi5kZW1vLmFydy50Zi9jb3NtZXRpYy9jdXN0b21lci9hY2NvdW50L2ZvcmdvdHBhc3N3b3JkLw,,/">EUR</a>
                                                    </li>
                                                    <li class="active">
                                                        <a href="http://sebian.demo.arw.tf/cosmetic/directory/currency/switch/currency/USD/uenc/aHR0cDovL3NlYmlhbi5kZW1vLmFydy50Zi9jb3NtZXRpYy9jdXN0b21lci9hY2NvdW50L2ZvcmdvdHBhc3N3b3JkLw,,/">USD</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="header">
                    <div class="container">
                        <div class="header-wrapper">
                            <div class="header-logo">
                                <a href="http://sebian.demo.arw.tf/cosmetic/" title="Magento Commerce" class="logo"><strong class="no-display">Magento Commerce</strong><img src="images/fashionmakeup.PNG" alt="Magento Commerce" /></a>
                            </div>
                            <!-- YEBDA EL NAV -->
        
                        </div>
                    </div>
                </div>
            </header>

            <div class="main-container col1-layout">
                <div class="arw-page-title">
                </div>
                <div class="main">
                    <div class="container">
                        <div class="row">
                            <div class="col-main col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="page-title">
                                    <h1>Mot De Passe Oubliée?</h1>
                                </div>
                             <form method="POST">
<input type="email" name="recup_mail">
<br> <br> <br>
<input type="submit" name="recup_submit">
</form>
<?php 
if (isset($error)) {
    echo '<span style="color:red">'.$error.'</span>';
}
?>

                                <script type="text/javascript">
                                    //<![CDATA[
                                    var dataForm = new VarienForm('form-validate', true);
                                    //]]>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer-container">
                <div class="arw_sebian_block_footer">
                    <div class="widget widget-static-block">
                        <div class="arw_sebian_block_footer_top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="footer-logo text-center">
                                            <a href="#" title="ARW Sebian">
                        <img src="images/fashionmakeup_dark.PNG" alt="ARW Sebian"/>
                    </a>
                                        </div>
                                        
                                    </div>
                                    <div class="footer-about">
                                        Multipurpose E-Commerce Theme is suitable for furniture store, fashion shop, accessories, electric shop. We have included multiple layouts for home page to give you best selections in customization.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget-static-block">
                        <div class="arw_sebian_block_footer_bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="arw-col col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="widget widget-static-block">
                                            <div class="block block-custom-link">
                                                <div class="block-title">
                                                    <span>INFOMATION</span>
                                                </div>
                                                <div class="block-content">
                                                    <ul>
                                                        <li><a href="#">ABOUT US</a></li>
                                                        <li><a href="#">DELIVERY INFOMATION</a></li>
                                                        <li><a href="#">PRIVACY & POLICY</a></li>
                                                        <li><a href="#">TEMRS & CONDITIONS</a></li>
                                                        <li><a href="#">MANUFACTURES</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="arw-col col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="widget widget-static-block">
                                            <div class="block block-custom-link">
                                                <div class="block-title">
                                                    <span>MY ACCOUNT</span>
                                                </div>
                                                <div class="block-content">
                                                    <ul>
                                                        <li><a href="#">MY ACCOUNT</a></li>
                                                        <li><a href="#">LOGIN</a></li>
                                                        <li><a href="#">MY CART</a></li>
                                                        <li><a href="#">WISHLIST</a></li>
                                                        <li><a href="#">CHECKOUT</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="arw-col col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="widget widget-static-block">
                                            <div class="block block-custom-twitter-feed">
                                                <div class="block-title">
                                                    <span>TWITTER</span>
                                                </div>
                                                <div class="block-content">
                                                    <ul>
                                                        <li class="twitter-feed-item">
                                                            Check out new work on my @Behance portfolio: "ARW Sebian Theme" <a target="_blank" href="http://on.be.net/1zOOfBQ">http://on.be.net/1zOOfBQ</a>
                                                        </li>
                                                        <li class="twitter-feed-item">
                                                            Check out new work on my @Behance portfolio: "ARW Sebian Theme" <a target="_blank" href="http://on.be.net/1zOOfBQ">http://on.be.net/1zOOfBQ</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="arw-col col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="widget widget-static-block">
                                            <div class="block block-custom-flickr-photo">
                                                <div class="block-title">
                                                    <span>FLICKR PHOTO</span>
                                                </div>
                                                <div class="block-content">
                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <a href="#"><img src="http://sebian.demo.arw.tf/media/wysiwyg/arw/_flickr_photo/flickr_image_1.jpg" alt="" /></a>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <a href="#"><img src="http://sebian.demo.arw.tf/media/wysiwyg/arw/_flickr_photo/flickr_image_2.jpg" alt="" /></a>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <a href="#"><img src="http://sebian.demo.arw.tf/media/wysiwyg/arw/_flickr_photo/flickr_image_3.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <a href="#"><img src="http://sebian.demo.arw.tf/media/wysiwyg/arw/_flickr_photo/flickr_image_4.jpg" alt="" /></a>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <a href="#"><img src="http://sebian.demo.arw.tf/media/wysiwyg/arw/_flickr_photo/flickr_image_5.jpg" alt="" /></a>
                                                        </div>
                                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                                            <a href="#"><img src="http://sebian.demo.arw.tf/media/wysiwyg/arw/_flickr_photo/flickr_image_6.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="wrapper-copyright">
                                    <address>&copy; 2015 <a href="http://www.arexmage.com/magento-themes.html" title="Magento Theme" target="_blank">Magento Theme</a> by ArexWorks. All Rights Reserved.</address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


            <script type="text/javascript">
                //<![CDATA[
                Mage.Cookies.set(
                    'PAGECACHE_ENV',
                    '74edef5691e5d28196b8139a80ba2a10',
                    new Date(new Date().getTime() + 3600 * 1000)
                );
                //]]>
            </script>
            <script type="text/javascript">
                if (document.cookie.length && (document.cookie.indexOf('PAGECACHE_FORMKEY=') == -1)) {
                    Mage.Cookies.set(
                        'PAGECACHE_FORMKEY',
                        '<esi:include src="http://sebian.demo.arw.tf/cosmetic/varnishcache/getformkey/" />',
                        new Date(new Date().getTime() + 3600000)
                    );
                }
            </script>
        </div>
    </div>
</body>
</html>
