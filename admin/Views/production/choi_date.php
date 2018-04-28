<?php
  include_once "../../Core/livraisoncore.php";
  include_once "../../Entities/livraison.php";
if (isset($_GET['modif'])) {
  $lC=new livraisoncore();
  $livraison=new livraison($_GET['id'],'','','','','',$_GET['pseudoLivreur'],$_GET['dateLivraison']);
  $lC->modifierlivraison2($livraison,$_GET['id_ini']);
  //header('location: afficherlivraisons.php');
  
  }
  ?>