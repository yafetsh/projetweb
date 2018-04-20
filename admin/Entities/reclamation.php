<?php
class Reclamation
{
  private $nom;
  private $prenom;
  private $mail;
  private $telephone;
  private $type;
  private $cause;
  private $etat;

  function __construct($nom,$prenom,$mail,$telephone,$type,$cause,$etat)
  {
$this->nom=$nom;
$this->prenom=$prenom;
$this->mail=$mail;
$this->telephone=$telephone;
$this->type=$type;
$this->cause=$cause;
$this->etat=$etat;

}
  function getNom(){
    return $this->nom;
  }
  function setNom($nom){
    $this->nom=$nom;
  }
  function getPrenom(){
    return $this->prenom;
  }
  function setPrenom($prenom){
    $this->prenom=$prenom;
  }
  function getMail(){
    return $this->mail;
  }
  function setMail($mail){
    $this->mail=$mail;
  }
  function getTelephone(){
    return $this->telephone;
  }
  function setTelephone($telephone){
    $this->telephone=$telephone;
  }
  function getType(){
    return $this->type;
  }
  function setType($type){
    $this->type=$type;
  }
  function getCause(){
    return $this->cause;
  }
  function setCause($cause){
    $this->cause=$cause;
  }
  function getEtat(){
    return $this->etat;
  }
  function setEtat($etat){
    $this->etat=$etat;
  }
}


 ?>
