<?php
class Reservation
{
  private $nom;
  private $prenom;
  private $telephone;
  private $type;
  private $date;

  function __construct($nom,$prenom,$telephone,$type,$date)
  {
$this->nom=$nom;
$this->prenom=$prenom;
$this->telephone=$telephone;
$this->type=$type;
$this->date=$date;
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
  function getDate(){
    return $this->date;
  }
  function setDate($date){
    $this->date=$date;
  }
}


 ?>
