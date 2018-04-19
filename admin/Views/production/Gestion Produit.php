<?php  
  include_once "../../Core/produitC.php";
  include_once "../../entities/produit.php";

use Twilio\Rest\Client;

  $produitC=new produitC();
  $listeProduit=$produitC->afficherproduitsansimg();
  $pC=new produitC();
  if(isset($_GET['supprimer'])){
    $pC->supprimerproduit($_GET["reference"]);
  }
  else if(isset($_GET['modifier'])){
    $p=$pC->reccupererproduit($_GET["reference"]);
    foreach ($p as $row) {
      $reference=$row['reference'];
      $quantite=$row['quantite'];
      $couleur=$row['couleur'];
      $prix=$row['prix'];
      $description=$row['description'];
      $nomC=$row['nomCatalogue']; 
    }
  }
  /*require _DIR_ . '/twilio-php-master/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API


// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC49817a9470818a803b9dcf34c3236df7';
$token = 'c50c84466fb75b0e8f722dbb2a76eddc';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+216 55 124 551',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '++15862033063',
        // the body of the text message you'd like to send
        'body' => "Bonjours !! Merci d'ajouter la facture! la date d'expiration est '$date_echeance_fin'"
    )
);*/
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FASHION MAKEUP || Liste des produits</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>FASHION MAKEUP</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenu,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Gestion de produit<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="AJOUTER PRODUIT.html">Ajout de Produits</a></li>
                      <li><a href="LISTE PRODUIT.php">liste de Produits</a></li>
                      <li><a href="GESTION PRODUIT.php">Gestion de Produits</a></li>
                      <li><a href="GESTION IMAGE.php">Gestion d'Images</a></li>
                      <!--<li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li>-->
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Tables</a></li>
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
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
                    <img src="images/img.jpg" alt="">John Doe
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
        <div class="right_col" role="main" style="min-height: 3000px">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>La liste des produits</h3>
              </div>


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Affichage <small>Produits</small></h2>
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
                    <form >
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Reference</th>
                          <th>Nom Catalogue</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($listeProduit as $row) {?>
                            <tr>
                            <td><?PHP echo $row['reference']; ?></td>
                            <td><?PHP echo $row['nomCatalogue']; ?></td>
                            <td>
                              <form method="GET">
                                <input type="submit" name="modifier" value="modifier" class="btn btn-success" style="height: 33px ;width:90px">
                                <input type="hidden" name="reference" value="<?php echo $row['reference']; ?>">
                              </form>
                              <form method="GET">
                                <input type="submit" name="supprimer" value="Supprimer" class="btn btn-success" style="background-color: blue;">
                              <input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
                              </form>
                            </td>
                          </tr>
                          <?php
                          }
                          ?>
                      </tbody>
                    
                    </form>
                    </table>
                  </div>
                
                <div class="">
            
            <div class="clearfix"></div>

            <div class="row" id="d">
              <div class="col-md-12 col-sm-12 col-xs-12"  >
                <div class="x_panel" >
                  <div class="x_title">
                    <h2>Produit a modifier</h2>
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
                  <div class="x_content" >

                    <form method="GET" class="form-horizontal form-label-left" novalidate>

                      <span class="section">Concernant le produit .. </span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Reference<span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Reference" name="Reference" required="required" class="form-control col-md-7 col-xs-12" value="<?PHP echo $reference ?>" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Couleur<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  id="Couleur" name="Couleur" required="required" class="form-control col-md-7 col-xs-12" value="<?PHP echo $couleur ?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantite<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Quantite" name="Quantite" required="required" data-validate-minmax="0,1000000000" class="form-control col-md-7 col-xs-12" value="<?PHP echo $quantite ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Prix<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Prix" name="Prix"  required="required" class="form-control col-md-7 col-xs-12" placeholder="dt" value="<?PHP echo $prix ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="Description" name="Description" class="form-control col-md-7 col-xs-12" value="<?PHP echo $description ?>" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">catalogue<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="catalogue" name="catalogue" required="required" class="form-control col-md-7 col-xs-12" id="catalogue" name="catalogue" value="<?php echo $nomC ?>">
                              <option> </option>
                            <optgroup label="YEUX">
                              <option>OMBRE A PAUPIERE SOLO</option>
                              <option>OMBRE A PAUPIERE TRIO</option>
                              <option>OMBRE A PAUPIERES 6 CLASSIC</option>
                              <option>OMBRE A PAUPIERES 6 VINTAGE</option>
                              <option>OMBRE A PAUPIERES 8 VINTAGE</option>
                              <option>OMBRE A PAUPIERE 6 STUDIO</option>
                              <option>OMBRE A PAUPIERE 10 STUDIO</option>
                              <option>MASCARA VOLUME</option>
                              <option>MASCARA VOLUME WATERPROOF</option>
                              <option>EYE LINER</option>
                              <option>EYE LINER LIQUIDE</option>
                              <option>EYELINER FEUTRE LONGUE TENUE</option>
                              <option>CRAYON YEUX</option>
                              <option>CRAYON YEUX RETRACTABLE</option>
                              <option>DUO</option>
                            </optgroup>
                            <optgroup label="LEVRES">
                              <option>ROUGES A LEVRES</option>
                              <option>ROUGE A LEVRES CLASSIC</option>
                              <option>BRILLANT A LEVRES</option>
                              <option>CRAYON LEVRES</option>
                              <option>CRAYON LEVRES RETRACTABLE</option>
                            </optgroup>
                            <optgroup label="TAINT">
                              <option>FARD A JOUES</option>
                              <option>POUDRE COMPACT</option>
                              <option>POUDRE BRONZANTE</option>
                              <option>ANTI-CERNES</option>
                            </optgroup>
                            <optgroup label="ONGLES">
                              <option>VERNIS A ONGLES CLASSIC</option>
                              <option>VERNIS A ONGLES PAILLETTES</option>
                              <option>VERNIS A ONGLES TENTATION</option>
                              <option>VERNIS A ONGLES FLUO UV</option>
                              <option>VERNIS A ONGLES CHROME</option>
                              <option>VERNIS A ONGLES EFFET UV</option>
                              <option>VERNIS A ONGLES SOINS</option>
                              <option>VERNIS A ONGLES 100% MAT</option>
                              <option>VERNIS A ONGLES PLUMES</option>
                              <option>VERNIS A ONGLES ECLATS</option>
                              <option>VERNIS A ONGLES BIJOUX</option>
                              <option>VERNIS A ONGLES BLACK & WHITE</option>
                              <option>VERNIS A ONGLES EFFET MAT</option>
                              <option>VERNIS A ONGLES BLOOM</option>
                              <option>DISSOLVANT DOUX EXPRESS</option>
                              <option>DISSOLVANT SANS ACETONE PROFESSIONNEL</option>
                              <option>DISSOLVANT MOUSSE</option>
                              <option>NUANCIERS VERNIS A ONGLES</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="RESET" class="btn btn-primary">RESET</button>
                          <button id="send" type="submit" class="btn btn-success" name="modif">MODIFIER</button>
                            <?php 
                                if (isset($_GET['modif'])) {
                                  $Produit=new Produit($_GET['Reference'],$_GET['Quantite'],$_GET['Prix'],$_GET['Couleur'],$_GET['Description'],$_GET['catalogue']);
                                  $pC->modifierproduit($Produit,$_GET['Reference']);
                                }
                             ?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      

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
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>

