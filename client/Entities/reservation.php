<?php
class Reservation
{
  private $id;
  private $nom;
  private $prenom;
  private $telephone;
  private $type;
  private $date;

  function __construct($id,$nom,$prenom,$telephone,$type,$date)
  {
$this->id=$id;
$this->nom=$nom;
$this->prenom=$prenom;
$this->telephone=$telephone;
$this->type=$type;
$this->date=$date;
}
function getId(){
  return $this->id;
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
  function setId($id){
    $this->id=$id;
  }
}


 ?>
