<?php
	
	include_once "../config.php";

	/**
	* 
	*/
	class imageC
	{
		
		function ajouter($image){
			$db = config::getConnexion();
			$sql="INSERT INTO image VALUES (:chemin,:reference,:couleur,:quantite)";
			$req=$db->prepare($sql);
			$req->bindValue(':reference',$image->getReference_produit());
			$req->bindValue(':chemin',$image->getChemin());
			$req->bindValue(':couleur',$image->getCouleur());
			$req->bindValue(':quantite',$image->getQuantite());
			$req->execute();
		}

		function recupererimage($reference){
			$db = config::getConnexion();
			$sql="SELECT * from image where reference_produit=$reference";
			$liste=$db->query($sql);
			return $liste;
		}

		function supprimer($chemin){
			$db = config::getConnexion();
			$sql1="DELETE FROM image where chemin =:chemin";
			$req1=$db->prepare($sql1);
			$req1->bindValue(':chemin',$chemin);
			$req1->execute();
		}

		function supprimerimg($reference){
			$db = config::getConnexion();
			$sql1="DELETE FROM image where 	reference_produit =:reference";
			$req1=$db->prepare($sql1);
			$req1->bindValue(':reference',$reference);
			$req1->execute();
		}
	}


  ?>