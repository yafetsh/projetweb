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
  private $idUtilisateur;

  function __construct($id,$rue,$numero,$region,$ville,$etat)
  {
$this->id=$id;
$this->etat=$etat;
$this->region=$region;
$this->ville=$ville;
$this->rue=$rue;
$this->numero=$numero;


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
  function getIdUtilisateur(){
    return $this->idUtilisateur;
  }
  function setIdUtilisateur($idUtilisateur){
    $this->idUtilisateur=$idUtilisateur;
  }
}


 ?>
