<?php
class livraison
{
  private $id;
  private $etat;
  private $region;
  private $ville;
  private $rue;
  private $numero;
  private $pseudoLivreur;
  private $datelivraison;
  function __construct($id,$rue,$numero,$region,$ville,$etat,$pseudoLivreur,$datelivraison)
  {
$this->id=$id;
$this->etat=$etat;
$this->region=$region;
$this->ville=$ville;
$this->rue=$rue;
$this->numero=$numero;
$this->pseudoLivreur=$pseudoLivreur;
$this->datelivraison=$datelivraison;

}

  function getEtat(){
    return $this->etat;
  }
  function setEtat($etat){
    $this->etat=$etat;
  }
  function getVille(){
    return $this->ville;
  }
  function setVille($ville){
    $this->ville=$ville;
  }
  function getRue(){
    return $this->rue;
  }
  function setRue($rue){
    $this->rue=$rue;
  }
  function getRegion(){
    return $this->region;
  }
  function setRegion($region){
    $this->region=$region;
  }
  function getNumero(){
    return $this->numero;
  }
  function setNumero($numero){
    $this->numero=$numero;
  }
  function getPseudoLivreur(){
    return $this->pseudoLivreur;
  }
  function setPseudoLivreur($pseudoLivreur){
    $this->pseudoLivreur=$pseudoLivreur;
  }
  function getdateLivraison(){
    return $this->datelivraison;
  }
  function setdateLivraison($datelivraison){
    $this->datelivraison=$datelivraison;
  }
}


 ?>
