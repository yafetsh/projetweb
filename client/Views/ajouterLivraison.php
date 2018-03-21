<?php
include "../Core/livraisoncore.php";
include "../Entities/livraison.php";
if (isset($_POST['ajouter'])){
	if (isset($_POST['type']) and isset($_POST['ville']) and isset($_POST['rue']) and isset($_POST['codepostal']) and isset($_POST['numero'])){
		$core=new employecore();
		$emp=new employe($_POST['type'],$_POST['ville'],$_POST['rue'],$_POST['codepostal'],$_POST['numero']);
		$core->ajouterLivraison($emp);
		//header("Location:afficheremploye.php");
	}
	else{
		echo "Verifier champs";
	}
}
?>