<?php

	include_once "../config.php";

	/**
	* 
	*/
	class livreurcore
	{
		
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
	}

  ?>