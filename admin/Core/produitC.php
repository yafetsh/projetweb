<?php

	include "../../config.php";

	/**
	* 
	*/
	class produitC
	{
		
		function ajouterproduit($produit,$image){
			$db = config::getConnexion();
			$sql1="insert into produit (reference,nom,quantite,prix,couleur,description,nomCatalogue) values (:reference,:nom,:quantite,:prix,:couleur,:description,:nomCatalogue)";
			$sql2="insert into image (chemin,reference) values (:chemin,:reference)";
			$req1=$db->prepare($sql1);
			$req2=$db->prepare($sql2);

			$req1->bindValue(':reference',$produit->getReference());
			$req1->bindValue(':nom',$produit->getNom());
			$req1->bindValue(':quantite',$produit->getQuantite());
			$req1->bindValue(':prix',$produit->getPrix());
			$req1->bindValue(':couleur',$produit->getCouleur());
			$req1->bindValue(':description',$produit->getDescription());
			$req1->bindValue(':nomCatalogue',$produit->getNomCatalogue());

			$req2->bindValue(':reference',$produit->getReference());
			$req2->bindValue(':chemin',$image->getChemin());

			$req1->execute();
			$req2->execute();

		}
	}

  ?>