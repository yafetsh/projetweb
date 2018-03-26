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
function ajouterlivraison($l){
	$sql="INSERT INTO `livraison`(`region`, `ville`, `rue`, `numero`) VALUES (:r,:v,:ru,:n)";
	$db=config::getConnexion();
	try{
		$req=$db->prepare($sql);
		$req->bindValue(":r",$e->getRegion());
		$req->bindValue(":v",$e->getVille());
		$req->bindValue(":ru",$e->getRue());
		$req->bindValue(":n",$e->getNumero());

		$req->execute();
	}catch(Exception $e){
		die ('Erreur : '.$e->getMessage());
	}
}
