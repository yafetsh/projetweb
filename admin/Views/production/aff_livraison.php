<?php
  include_once "../../Core/livraisoncore.php";
  include_once "../../Entities/livraison.php";
$lC=new livraisoncore();
if (isset($_GET['modif'])) {
  $lC=new livraisoncore();
  $livraison=new livraison($_GET['id'],'','','','','',$_GET['pseudoLivreur'],$_GET['datelivraison']);
  $lC->modifierlivraison1($livraison,$_GET['id_ini']);
  header('location: affecterlivraison.php');
  
  }
  ?>