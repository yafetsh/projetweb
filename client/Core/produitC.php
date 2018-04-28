<?php

	include_once "../config.php";

	/**
	* 
	*/
	class produitC
	{
		
		function ajouter($produit){
			$db = config::getConnexion();
			$sql = "INSERT INTO produit (reference,nom,quantite_total,prix,description,date_ajout,reference_sous_categorie) VALUES (:reference,:nom,:quantite_total,:prix,:description,:date_ajout,:reference_sous_categorie)";
			$req = $db->prepare($sql);
			$req->bindValue(':reference',$produit->getReference());
			$req->bindValue(':nom',$produit->getNom());
			$req->bindValue(':quantite_total',$produit->getQuantite_total());
			$req->bindValue(':prix',$produit->getPrix());
			$req->bindValue(':description',$produit->getDescription());
			$req->bindValue(':date_ajout',$produit->getDate_ajout());
			$req->bindValue(':reference_sous_categorie',$produit->getReference_sous_categorie());								
			$req->execute();

		}

		function recuperer($reference_sous_categorie){
			$db = config::getConnexion();
			$sql = "SELECT * FROM produit WHERE reference_sous_categorie = $reference_sous_categorie";
			$liste=$db->query($sql);
			return $liste;
		}

		
		function afficherproduitavecimg(){
			$db = config::getConnexion();
			$sql="SElECT produit.nom,produit.reference,image.chemin from produit INNER JOIN image ON produit.reference=image.reference_produit ";
			$liste=$db->query($sql);
			return $liste;
		}

		function recupererproduit(){
			$db = config::getConnexion();
			$sql="SELECT reference,nom FROM produit";
			$liste=$db->query($sql);
			return $liste;
		}

		function afficherproduit(){
			$db = config::getConnexion();
			$sql="SELECT * FROM produit ";
			$liste=$db->query($sql);
			return $liste;
		}

		function supprimerproduit($reference){
			$db = config::getConnexion();
			$sql="DELETE FROM produit where reference= :reference";
			$req=$db->prepare($sql);
			$req->bindValue(':reference',$reference);
	        $req->execute();
		}

		function modifierproduit($produit,$ref){
			$db = config::getConnexion();
			$sql="UPDATE produit SET nom=:nom,quantite_total=:quantite_total,prix=:prix,description=:description WHERE reference=:ref";
			try{
				$req=$db->prepare($sql);
				$req->bindValue(':quantite_total',$produit->getQuantite_total());
				$req->bindValue(':prix',$produit->getPrix());
				$req->bindValue(':description',$produit->getDescription());
				$req->bindValue(':nom',$produit->getNom());
				$req->bindValue(':ref',$ref);
				$s=$req->execute();
			}
			catch(Exception $e){
				echo("Erreur".$e->getMessage());
			}

		}

		function recuperer_produit($reference){
			$db = config::getConnexion();
			$sql="SELECT * FROM produit WHERE reference=$reference";
			$liste=$db->query($sql);
			return $liste;
		}



		function recup_produit(){
			$db = config::getConnexion();
			$sql="SELECT * FROM produit WHERE id_promotion IS NOT NULL";
			$liste=$db->query($sql);
			return $liste;
		}

		function compter($ref){
			$db = config::getConnexion();
			$sql="SELECT COUNT(reference) FROM produit WHERE reference LIKE $ref%";
			$liste=$db->prepare($sql);
			return $liste;
		}

		function recupererprodord(){
			$db = config::getConnexion();
			$sql = "SELECT * FROM produit ORDER BY date_ajout DESC";
			$liste=$db->query($sql);
			return $liste;
		}

		function recupererpromo($id){
			$db = config::getConnexion();
			$sql = "SELECT * FROM promotion where id=$id";
			$liste=$db->query($sql);
			return $liste;
		}

		function recproduit($nom){
			$db = config::getConnexion();
			$sql = "SELECT * FROM promotion WHERE nom LIKE :nom";
			$req = $db->prepare($sql);
			$p = "%".$nom."%";
			$req->bindValue(':nom',$p);
			$req->execute();
		}

/*
		function afficherproduitseloncategorie($catalogue){
			$db = config::getConnexion();
			$sql="SElECT * FROM produit WHERE nomCatalogue=:catalogue";
			$req=$db->prepare($sql);
			$req->bindValue(':catalogue',$catalogue);
			return $liste;
		}

		

		function reccupererproduit($reference){
			$db = config::getConnexion();
			$sql="SELECT * from produit where reference=$reference";
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

		*/
	}

  ?>