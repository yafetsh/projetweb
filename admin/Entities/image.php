<?php

	/**
	* 
	*/
	class image
	{
		private $chemin;
		private $reference_produit;
		private $couleur;

		function __construct($chemin,$reference_produit,$couleur)
		{
			$this->chemin=$chemin;
			$this->reference_produit=$reference_produit;
			$this->couleur=$couleur;
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

		function setChemin($chemin){
			$this->chemin=$chemin;
		}
		function setReference_produit($reference_produit){
			$this->reference_produit=$reference_produit;
		}
		function setCouleur($couleur){
			$this->couleur=$couleur;
		}
	}

  ?>