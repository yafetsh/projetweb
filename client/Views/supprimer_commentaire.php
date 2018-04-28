<?php

	include_once "../Core/commentaireC.php";

	$supp = new commentaireC();
	$supp->supprimer($_POST['id_c']);
	header('location: Produit1.php');

  ?>