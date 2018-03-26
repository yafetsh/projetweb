<?php

	include_once "../../Core/produitC.php";
	include_once "../../Entities/produit.php";
	include_once "../../Entities/image.php";

	if(isset($_POST['Reference']) and isset($_POST['Couleur']) and isset($_POST['Quantite']) and isset($_POST['Prix']) and isset($_POST['Image'])){
		$produit=new produit($_POST['Reference'],$_POST['Quantite'],$_POST['Prix'],$_POST['Couleur'],$_POST['Description'],$_POST['catalogue']);
		$image=new image($_POST['Image'],$_POST['Reference']);
		$produitc=new produitC();
		$produitc->ajouterproduit($produit,$image);

		header('location: AJOUTER PRODUIT_1.html');

	}
	else {
		echo "Verifier les champs";
	}

  ?>