<?php

	include_once "../config.php";
	/**
	* 
	*/
	class commentaireC
	{
		
		function ajouter($commentaire){
			$db = config::getConnexion();
			$sql = "INSERT INTO commentaire(id_membre,id_produit,commentaire,date_ajout) VALUES (:id_membre,:id_produit,:commentaire,:d)";
			$req = $db->prepare($sql);
			$req->bindValue(':id_membre',$commentaire->getIdmembre());
			$req->bindValue(':id_produit',$commentaire->getIdproduit());
			$req->bindValue(':commentaire',$commentaire->getCommentaire());
			$req->bindValue(':d',$commentaire->getDate());
			$req->execute();
		}

		function afficher($id_produit){
			$db = config::getConnexion();
			$sql = "SELECT * FROM commentaire WHERE id_produit = $id_produit";
			$liste = $db->query($sql);
			return $liste;
		}

		function afficher1(){
			$db = config::getConnexion();
			$sql = "SELECT * FROM commentaire";
			$liste = $db->query($sql);
			return $liste;
		}

		function recuperer($id_membre){
			$db = config::getConnexion();
			$sql = "SELECT pseudo FROM membre WHERE id = $id_membre";
			$liste = $db->query($sql);
			return $liste;
		}

		function supprimer($id_commentaire){
			$db = config::getConnexion();
			$sql = "DELETE  FROM commentaire WHERE id_commentaire = $id_commentaire";
			$req = $db->prepare($sql);
			$req->execute();;
		}

	}

?>