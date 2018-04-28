<?php

	include_once "../Entities/commentaire.php";
	include_once "../Core/commentaireC.php";

	session_start();
	$d = date("y/m/d");
	$reference = $_POST['refe'];
	$id = $_SESSION['id'];
	$c = $_POST['commentaire'];
	echo($id);
	$commentaire = new commentaire("",$id,$reference,$c,$d);
	$commentaireC = new commentaireC();
	$commentaireC->ajouter($commentaire);

	header('location: Produit1.php');
  ?>