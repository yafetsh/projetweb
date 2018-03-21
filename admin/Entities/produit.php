<?php
	/**
	* 
	*/
	class Produit
	{
		private $reference;
		private $nom;
		private $quantite;
		private $prix;
		private $couleur;
		private $description;
		private $nomCatalogue;
		private $idPromotion;
		
		function __construct($reference,$nom,$quantite,$prix,$couleur,$description,$nomCatalogue,$idPromotion)
		{
			$this->reference=$reference;
			$this->nom=$nom;
			$this->quantite=$quantite;
			$this->prix=$prix;
			$this->couleur=$couleur;
			$this->description=$description;
			$this->nomCatalogue=$nomCatalogue;
			$this->idPromotion=$idPromotion;
		}

		function getReference(){
			return $this->reference;
		}
		function getNom(){
			return $this->nom;
		}
		function getQuantite(){
			return $this->quantite;
		}
		function getPrix(){
			return $this->prix;
		}
		function getCouleur(){
			return $this->couleur;
		}
		function getDescription(){
			return $this->description;
		}
		function getNomCatalogue(){
			return $this->nomCatalogue;
		}
		function getIdPromotion(){
			return $this->idPromotion;
		}

		function setReference($reference){
			$this->reference=$reference;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setQuantite($quantite){
			$this->quantite=$quantite;
		}
		function setPrix($prix){
			$this->prix=$prix;
		}
		function setCouleur($couleur){
			$this->couleur=$couleur;
		}
		function setDescription($description){
			$this->description=$description;
		}
		function setNomCatalogue($nomCatalogue){
			$this->nomCatalogue=$nomCatalogue;
		}
		function setIdPromotion($idPromotion){
			$this->idPromotion=$idPromotion;
		}
	}

  ?>