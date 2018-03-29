<?php
	/**
	* 
	*/
	class Produit
	{
		private $reference;
		private $quantite;
		private $prix;
		private $couleur;
		private $description;
		private $nomCatalogue;
		
		function __construct($reference,$quantite,$prix,$couleur,$description,$nomCatalogue)
		{
			$this->reference=$reference;
			$this->quantite=$quantite;
			$this->prix=$prix;
			$this->couleur=$couleur;
			$this->description=$description;
			$this->nomCatalogue=$nomCatalogue;
		}

		function getReference(){
			return $this->reference;
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

		function setReference($reference){
			$this->reference=$reference;
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
	}

  ?>