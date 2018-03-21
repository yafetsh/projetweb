<?php
class livraison
{
  private $type;
  private $ville;
  private $rue;
  private $codepostal;
  private $numero;
  private $pseudoLivreur;
  private $idUtilisateur;

  function __construct($type,$ville,$rue,$codepostal,$numero,$pseudoLivreur,$idUtilisateur)
  {
$this->type=$type;
$this->ville=$ville;
$this->rue=$rue;
$this->codepostal=$codepostal;
$this->numero=$numero;
$this->pseudoLivreur=$pseudoLivreur;
$this->idUtilisateur=$idUtilisateur;

}
  function getType(){
    return $this->type;
  }
  function setType($type){
    $this->type=$type;
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
  function setRue($type){
    $this->rue=$rue;
  }
  function getCodepostal(){
    return $this->codepostal;
  }
  function setCodepostal($codepostal){
    $this->codepostal=$codepostal;
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
