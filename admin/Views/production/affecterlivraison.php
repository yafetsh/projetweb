<?PHP
include "../../Core/livraisoncore.php";
session_start();
$livraison1C=new livraisoncore();
$listeLivraisons=$livraison1C->afficherLivraisonssansLivreurs();
$livraison2C=new livraisoncore();
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
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Fashion MakeUp!</span></a>
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
                <h3>Livraisons</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des livraisons pas encore affectées par des livreurs</h2>
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
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID_livraison</th>
                          <th>Rue</th>
                          <th>Numero de telephone</th>
                          <th>Region/Ville</th>                          
                          <th>Date passage du commande</th>
                          <th>Date livraison</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?PHP
                        foreach($listeLivraisons as $row){
                          ?>
                          <tr>
                          <td><?PHP echo $row['id']; ?></td>
                          <td><?PHP echo $row['rue']; ?></td>
                          <td><?PHP echo $row['numero']; ?></td>
                          <td><?PHP echo $row['region']; ?> / <br><?php echo $row['ville']; ?></td> 
                          <td><?PHP echo $row['date']; ?></td>
                          <td>Pas encore affectée</td>
                          
                          <td>
                            <a href="affecterlivraison3.php?id=<?PHP echo $row['id']; ?>" class="btn btn-success" style="background-color: blue; width:120px">Choisir une date </a>
                          </td>
                          </tr>
  <?PHP
}
?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
      <footer>
          <div style:center class="pull-right">
            Fashion MakeUp - Bootstrap Admin Template by ArtVision</a>
          </div>
          <div class="clearfix"></div>
        </footer>
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

