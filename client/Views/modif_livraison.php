<?php
  include_once "../Core/livraisoncore.php";
  include_once "../Entities/livraison.php";
$lC=new livraisoncore();
if (isset($_GET['modif'])) {
  $livraison=new livraison('',$_GET['rue'],$_GET['numero'],$_GET['region'],$_GET['ville']);
  $lC->modifierlivraison($livraison,$_GET['id_ini']);
  echo $_GET['id_ini'];
  header('location: livraisonclient.php');

  }
  ?>