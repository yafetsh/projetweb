<?php

	include "../../Core/produitC.php";
	include "../../Entities/produit.php";
	include "../../Entities/image.php";

	if(isset($_POST['nom']) and isset($_POST['Reference']) and isset($_POST['Couleur']) and isset($_POST['Quantite']) and isset($_POST['Prix']) and isset($_POST['Image'])){
		$produit=new produit($_POST['Reference'],$_POST['nom'],$_POST['Quantite'],$_POST['Prix'],$_POST['Couleur'],$_POST['Description'],$_POST['catalogue']);
		$image=new image($_POST['Image'],$_POST['Reference']);
		$produitc=new produitC();
		$produitc->ajouterproduit($produit,$image);

		header('location: AJOUTER PRODUIT_1.html');

	}
	else {
		echo "Verifier les champs";
	}

  ?>