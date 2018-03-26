<?php

  include_once "../Core/livraisoncore.php";
  include_once "../Entities/livraison.php";

  if(isset($_POST['rue']) and isset($_POST['numero']) and isset($_POST['region']) and isset($_POST['ville'])){
    $livraison=new livraison($_POST['rue'],$_POST['numero'],$_POST['region'],$_POST['ville']);
    $livraisonc=new livraisoncore();
    $livraisonc->ajouterlivraison($l);

    header('location: calendar.html');

  }
  else {
    echo "Verifier les champs";
  }

  ?>