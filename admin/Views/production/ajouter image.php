<?php
  include_once "../../Entities/image.php";
  include_once "../../Core/imageC.php";
  include_once "../../Core/produitC.php";
  $imageC = new imageC();
  if (isset($_POST['image']) and isset($_POST['couleur']) and isset($_POST['ajouterr']) and isset($_POST['q'])) {
    $listeimage = $imageC->recupererimage($_POST['reference']);
    $q = $_POST['q'];
    foreach ($listeimage as $key) {
      $q = $q+$key['quantite'];
    }
    $pC = new produitC();
    $p =$pC->recuperer_produit($_POST['reference']);
    foreach ($p as $row) {
      if($q>$row['quantite_total']){
        echo("vous avez depasser la quantite total du ce produit !"."<br>"."verifier les champs ou modifier les donnees de ce produit");
      }
      else{
        $img = new image($_POST['image'],$_POST['reference'],$_POST['couleur'],$_POST['q']);
        $imageC->ajouter($img);
        header('location: GESTION IMAGE.php');
      }
    }
   /*if{

    }
    else{
      
    }*/
    
  }
  

  ?>