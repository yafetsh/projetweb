<?php
	/**
	* 
	*/
	class Produit
	{
		private $reference;
		private $nom;
		private $quantite_total;
		private $prix;
		private $date_ajout;
		private $description;
		private $reference_sous_categorie;
		
		function __construct($reference,$nom,$quantite_total,$prix,$date_ajout,$description,$reference_sous_categorie)
		{
			$this->reference=$reference;
			$this->nom=$nom;
			$this->quantite_total=$quantite_total;
			$this->prix=$prix;
			$this->date_ajout=$date_ajout;
			$this->description=$description;
			$this->reference_sous_categorie=$reference_sous_categorie;
		}

		function getReference(){
			return $this->reference;
		}
		function getNom(){
			return $this->nom;
		}
		function getQuantite_total(){
			return $this->quantite_total;
		}
		function getPrix(){
			return $this->prix;
		}
		function getDate_ajout(){
			return $this->date_ajout;
		}
		function getDescription(){
			return $this->description;
		}
		function getReference_sous_categorie(){
			return $this->reference_sous_categorie;
		}

		function setReference($reference){
			$this->reference=$reference;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setQuantite_total($quantite_total){
			$this->quantite_total=$quantite_total;
		}
		function setPrix($prix){
			$this->prix=$prix;
		}
		function setDate_ajout($date_ajout){
			$this->date_ajout=$date_ajout;
		}
		function setDescription($description){
			$this->description=$description;
		}
		function setReference_sous_categorie($reference_sous_categorie){
			$this->reference_sous_categorie=$reference_sous_categorie;
		}
	}

  ?>