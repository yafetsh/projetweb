<?php

    include_once "../../Core/livreurcore.php";
    include_once "../../Entities/livreur.php";
    session_start();
if ( !empty($_POST)) { 
    $nomError = null; 
     $prenomError = null;
     $telError =  null;
     $emailError = null;
    $nom = $_POST['nom']; 
     $prenom = $_POST['prenom'];
    $tel = $_POST['tel']; 
    $email= $_POST['email']; 
    $valid = true;
    $nom = test_input($_POST["nom"]);
    $prenom = test_input($_POST["prenom"]);
    // check if name only contains letters and whitespace
    if(!preg_match("/^[5-9]{1}[0-9]{7}$/", $tel)) {
  // $phone is valid
       $telError = "Numero incorrect";
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
      $nomError = "Seuls les lettres sont autorisées"; 
    }
     if (!preg_match("/^[a-zA-Z ]*$/",$prenom)) {
      $prenomError = "Seuls les lettres sont autorisées"; 
    }
    if (empty($nom)) {
        $nomError = '*Champs requis';
        $valid = false;
    }
    if (empty($prenom)) {
        $prenomError = '*Champs requis';
        $valid = false;
    }
    if (empty($tel)) {
        $telError = '*Champs requis';
        $valid = false;
    }
    
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  if (empty($email)) {
        $emailError = '*Champs requis';
        $valid = false;
    }
  else $emailError = "Invalid email format"; 
}
else if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['tel']) and isset($_POST['email'])){
     // if (($_POST['nom'] !="")&&($_POST['prenom'] !="")&&($_POST['tel'] !="")&&($_POST['email'] !="")) {
        # code...
      
        $livreur1=new livreur($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['email']);
        $livreur1c=new livreurcore();
        $livreur1c->ajouterlivreur($livreur1);
        header("Location: afficherlivreurs.php");

    }
    //else {
      //  echo "Verifier les champs";
    }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>

  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FASHION MAKEUP | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenue,</span>
                <h2><?php echo $_SESSION['pseudo']; ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                   <li><a href="index.php"><i class="fa fa-home" ></i>Home</a>
                  </li>
                  <li><a href="index.php"><i class="fa fa-edit"></i> Gestion de produit  <span class="fa fa-chevron-down"></span> </a>
                    <ul class="nav child_menu">
                      <li><a href="AJOUTER PRODUIT.php">Ajout de Produits</a></li>
                      <li><a href="LISTE PRODUIT.php">liste de Produits</a></li>
                      <li><a href="GESTION IMAGE.php">Gestion d'Images</a></li>
                    </ul>
                  </li>
                  <li><a href="reservationAdmin.php"><i class="fa fa-desktop"></i> Réservation </a></li>
                  <li><a href="reclamationAdmin.php"><i class="fa fa-desktop"></i> Réclamation </a> </li>
                  <li><a><i class="fa fa-table"></i> Gestion de livraison <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="afficherlivraisons.php">Liste des livraisons</a></li>
                      <li><a href="afficherlivreurs.php">Livreurs<span class="fa fa-chevron-down"></span></a>
                        <ul >
                          <li><a href="ajouterlivreur.php">Ajouter un livreur</a></li>
                          <li><a href="afficherlivreurs.php">Liste des livreurs</a></li>
                        </ul>
                      </li>
                      <li><a href="affecterlivraison.php">Affecter une livraison à un livreur</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-table"></i> Gestion de Commandes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Commande.php">Afficher Commandes Payes</a></li>
                      <li><a href="statcommande.php">Statistiaues</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Manel Ammara
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>LIVREUR</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ajouter un livreur</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form method="POST" class="form-horizontal form-label-left" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nom" class="form-control col-md-7 col-xs-12" name="nom"  type="text" value="<?php echo !empty($nom)?$nom:'';?>">
                           <?php if (!empty($nomError)): ?>
                              <span class="help-inline" style="color:Red"><?php echo $nomError;?></span>
                          <?php endif; ?>
                        </div>
                      </div>

                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prenom<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="prenom" name="prenom"  class="form-control col-md-7 col-xs-12" value="<?php echo !empty($prenom)?$prenom:'';?>">
                           <?php if (!empty($prenomError)): ?>
                              <span class="help-inline" style="color:Red"><?php echo $prenomError;?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telephone<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input placeholder="00 000 000" class="form-control col-md-7 col-xs-12" name="tel" id="tel" type="text" value="<?php echo !empty($tel)?$tel:'';?>">
                           <?php if (!empty($telError)): ?>
                              <span class="help-inline" style="color:Red"><?php echo $telError;?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" name="email"  class="form-control col-md-7 col-xs-12" value="<?php echo !empty($email)?$email:'';?>">
                           <?php if (!empty($emailError)): ?>
                              <span class="help-inline" style="color:Red"><?php echo $emailError;?></span>
                          <?php endif; ?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="RESET" class="btn btn-primary">RESET</button>
                          <button id="send" type="submit" class="btn btn-success">VALIDER</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by ArtVision</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
