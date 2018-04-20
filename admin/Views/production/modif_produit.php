<?php
  include_once "../../Core/produitC.php";
  include_once "../../Core/imageC.php";
  include_once "../../Entities/produit.php";

  $produitC=new produitC();
  $imageC = new imageC();
  if(isset($_GET['supprimer'])){
    $imageC->supprimer($_GET['ref']);
    $produitC->supprimerproduit($_GET['ref']);
    header('location: LISTE PRODUIT.php');
  } 
  else if (isset($_GET['modif'])) {

    $Produit=new Produit($_GET['R'],$_GET['Nom'],$_GET['Quantite'],$_GET['Prix'],$_GET['date'],$_GET['Description'],$_GET['sous']);
    $produitC->modifierproduit($Produit,$Produit->getReference());
    header('location: LISTE PRODUIT.php');
  }
  ?>