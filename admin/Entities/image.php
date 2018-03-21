<?php

	/**
	* 
	*/
	class image
	{
		private $chemin;
		private $reference;

		function __construct($chemin,$reference)
		{
			$this->chemin=$chemin;
			$this->reference=$reference;
		}

		function getChemin(){
			return $this->chemin;
		}
		function getReference(){
			return $this->reference;
		}
		function setChemin($chemin){
			$this->chemin=$chemin;
		}
		function setReference($reference){
			$this->reference=$reference;
		}
	}

  ?>