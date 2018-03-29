<?php

	include_once "../config.php";

	/**
	* 
	*/
	class produitC
	{
		function affichercategorie(){
			$db = config::getConnexion();
			$sql="SELECT * FROM catalogue";
			$liste=$db->query($sql);
			return $liste;
		}

		function affichercatalogue(){
			$db = config::getConnexion();
			$sql="SELECT * FROM catalogue";
			$liste=$db->query($sql);
			return $liste;
		}

		function reccupererproduit(){
			$db = config::getConnexion();
			$sql="SELECT * from produit";
			$liste=$db->query($sql);
			return $liste;
		}

		function reccupererimage($reference){
			$db = config::getConnexion();
			$sql="SELECT * from image where reference=$reference";
			$liste=$db->query($sql);
			return $liste;
		}

		function calculerproduit($repere){
			$db = config::getConnexion();
			$sql="SELECT count(reference) AS ref FROM produit WHERE nomCatalogue=$repere";
			$liste=$db->query($sql);
			return $liste;
		}

		/*function ajouterproduit($produit,$image){
			$db = config::getConnexion();
			$sql1="insert into produit (reference,quantite,prix,couleur,description,nomCatalogue) values (:reference,:quantite,:prix,:couleur,:description,:nomCatalogue)";
			$sql2="insert into image (chemin,reference) values (:chemin,:reference)";
			$req1=$db->prepare($sql1);
			$req2=$db->prepare($sql2);

			$req1->bindValue(':reference',$produit->getReference());
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

		function ajouterimage($image){
			$db = config::getConnexion();
			$sql2="insert into image (chemin,reference) values (:chemin,:reference)";
			$req2=$db->prepare($sql2);
			$req2->bindValue(':reference',$image->getReference());
			$req2->bindValue(':chemin',$image->getChemin());
			$req2->execute();
		}

		function afficherproduit (){
			$db = config::getConnexion();
			$sql="SElECT produit.reference,produit.quantite,produit.prix,produit.couleur,produit.description,produit.nomCatalogue,image.Chemin from produit INNER JOIN image ON produit.reference=image.reference";
			$liste=$db->query($sql);
			return $liste;
		}

		function afficherproduitsansimg(){
			$db = config::getConnexion();
			$sql="SElECT * FROM produit";
			$liste=$db->query($sql);
			return $liste;
		}

		function afficherproduitseloncategorie($catalogue){
			$db = config::getConnexion();
			$sql="SElECT * FROM produit WHERE nomCatalogue=:catalogue";
			$req=$db->prepare($sql);
			$req->bindValue(':catalogue',$catalogue);
			return $liste;
		}

		function modifierproduit($produit,$ref){
			$db = config::getConnexion();
			//$sql1="UPDATE image SET reference=:reference, Chemin=:chemin WHERE reference=:ref";
			$sql2="UPDATE produit SET reference=:reference,quantite=:quantite,prix=:prix,couleur=:couleur,description:=description,nomCatalogue=:nomCatalogue WHERE reference=:ref";
			//$req1=$db->prepare($sql1);
			$req2=$db->prepare($sql2);
			//$req1->bindValue(':ref',$ref);
			$req2->bindValue(':ref',$ref);
			//$req1->bindValue(':chemin',$image->getChemin());
			$req2->bindValue(':reference',$produit->getReference());
			$req2->bindValue(':quantite',$produit->getQuantite());
			$req2->bindValue(':prix',$produit->getPrix());
			$req2->bindValue(':couleur',$produit->getCouleur());
			$req2->bindValue(':description',$produit->getDescription());
			$req2->bindValue(':nomCatalogue',$produit->getNomCatalogue());
			//$req1->execute();
			$req2->execute();

		}

		function reccupererproduit($reference){
			$db = config::getConnexion();
			$sql="SELECT * from produit where reference=$reference";
			$liste=$db->query($sql);
			return $liste;
		}

		function reccupererimage($reference){
			$db = config::getConnexion();
			$sql="SELECT Chemin from image where reference=$reference";
			$liste=$db->query($sql);
			return $liste;
		}

		function supprimerproduit($reference){
			$sql1="DELETE FROM image where reference= :reference";
			$sql="DELETE FROM produit where reference= :reference";
			$db = config::getConnexion();
			$req1=$db->prepare($sql1);
	        $req=$db->prepare($sql);
			$req1->bindValue(':reference',$reference);
			$req->bindValue(':reference',$reference);
	        $req1->execute();
	        $req->execute();
		}

		function supprimerimage($chemin){
			$sql1="DELETE FROM image where Chemin= :Chemin";
			$db = config::getConnexion();
			$req1=$db->prepare($sql1);
			$req1->bindValue(':Chemin',$chemin);
			$req1->execute();
		}*/
	}

  ?>