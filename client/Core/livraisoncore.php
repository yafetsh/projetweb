<?php
include_once "../Config.php";
class employecore
{
	function afficherLivraison($l){
		//var_dump($e);
		$type=$e->getType();
		$ville=$e->getVille();
		$rue=$e->getRue();
		$codepostal=$e->getCodepostal();
		$numero=$e->getNumero();

		echo "Type: " .$type. "<br>"; //ou bien echo("CIN :".$e->getCin. "<br>"); ou ma na3mlouch l init lfou9
		echo "Ville: " .$ville. "<br>";
		echo "Rue: " .$rue. "<br>";
		echo "Code postal: " .$codepostal. "<br>";
		echo "Numero: " .$numero. "<br>";
	}
	function afficherLivraisons(){

		$c=config::getConnexion();
		$sql="SELECT * FROM livraison";
		try{
			$liste=$c->query($sql);
			return $liste;

		}catch(Exception $e){
			die('Erreur : ' .$e->getMessage());
		}

	}
}
function ajouterLivraison($l){
	$sql="INSERT INTO `livraison`(`type`, `ville`, `rue`, `codepostal`, `numero`) VALUES (:t,:v,:r,:c,:n)";
	$db=config::getConnexion();
	try{
		$req=$db->prepare($sql);
		$req->bindValue(":t",$e->getType());
		$req->bindValue(":v",$e->getVille());
		$req->bindValue(":r",$e->getRue());
		$req->bindValue(":c",$e->getCodepostal());
		$req->bindValue(":n",$e->getNumero());

		$req->execute();
	}catch(Exception $e){
		die ('Erreur : '.$e->getMessage());
	}
}
