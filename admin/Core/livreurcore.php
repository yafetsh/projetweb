<?php

	include_once "../../config.php";

	/**
	* 
	*/
	class livreurcore
	{
		function afficherLivreur($l){
		//var_dump($e);
		$nom=$e->getNom();
		$prenom=$e->getRegion();
		$tel=$e->getTel();
		$email=$e->getEmail();

		echo "Nom: " .$nom. "<br>"; //ou bien echo("CIN :".$e->getCin. "<br>"); ou ma na3mlouch l init lfou9
		echo "Prenom :" .$prenom. "<br>";
		echo "Tel: " .$tel. "<br>";
		echo "Email: " .$email. "<br>";
	}
	function afficherLivreurs(){
		$c=Config::getConnexion();
		$sql="SELECT * FROM livreur";
		try{
			$liste=$c->query($sql);
			return $liste;

		}catch(Exception $e){
			die('Erreur : ' .$e->getMessage());
		}

	}
}
		
		function ajouterlivreur($nom,$prenom,$tel,$email,$mdp){
			$db = config::getConnexion();
			$sql="insert into livreur (nom,prenom,tel,email,mdp) values (:nom,:prenom,:tel,:email,:mdp)";
			$req=$db->prepare($sql);

			$req->bindValue(':nom',$livreur->getNom());
			$req->bindValue(':prenom',$livreur->getPrenom());
			$req->bindValue(':tel',$livreur->getTel());
			$req->bindValue(':email',$livreur->getEmail());
			$req->bindValue(':mdp',$livreur->getMdp());
			
			$req->execute();

		}
	

  ?>