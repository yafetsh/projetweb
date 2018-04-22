<?php

	/**
	* 
	*/
	class image
	{
		private $chemin;
		private $reference_produit;
		private $couleur;
		private $quantite;

		function __construct($chemin,$reference_produit,$couleur,$quantite)
		{
			$this->chemin=$chemin;
			$this->reference_produit=$reference_produit;
			$this->couleur=$couleur;
			$this->quantite=$quantite;
		}

		function getChemin(){
			return $this->chemin;
		}
		function getReference_produit(){
			return $this->reference_produit;
		}
		function getCouleur(){
			return $this->couleur;
		}
		function getQuantite(){
			return $this->quantite;
		}


		function setChemin($chemin){
			$this->chemin=$chemin;
		}
		function setReference_produit($reference_produit){
			$this->reference_produit=$reference_produit;
		}
		function setCouleur($couleur){
			$this->couleur=$couleur;
		}
		function setQuantite($quantite){
			$this->quantite=$quantite;
		}
	}

  ?>