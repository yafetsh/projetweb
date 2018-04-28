<?php 

	/**
	* 
	*/
	class commentaire
	{
		private $id;
		private $commentaire;
		private $id_membre;
		private $id_produit;
		private $date;

		function __construct($id,$id_membre,$id_produit,$commentaire,$date)
		{
			$this->id=$id;
			$this->commentaire=$commentaire;
			$this->id_membre=$id_membre;
			$this->id_produit=$id_produit;
			$this->date=$date;
		}

		function getId(){
			return $this->id;
		}

		function getCommentaire(){
			return $this->commentaire;
		}

		function getIdmembre(){
			return $this->id_membre;
		}

		function getIdproduit(){
			return $this->id_produit;
		}

		function getDate(){
			return $this->date;
		}

		function setId($id){
			$this->id=$id;
		}

		function setCommentaire($commentaire){
			$this->commentaire=$commentaire;
		}

		function setIdmembre($id_membre){
			$this->id_membre=$id_membre;
		}

		function etIdproduit($id_produit){
			$this->id_produit=$id_produit;
		}

		function setDate($date){
			$this->date=$date;
		}		
	}

?>