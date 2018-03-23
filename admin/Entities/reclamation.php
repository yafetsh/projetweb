<?php
class Reclamation
{
  private $nom;
  private $mail;
  private $type;
  private $categorie;
  private $produit;
  private $cause;

  function __construct($nom,$mail,$type,$categorie,$produit,$cause)
  {
$this->nom=$nom;
$this->mail=$mail;
$this->type=$type;
$this->categorie=$categorie;
$this->produit=$produit;
$this->cause=$cause;

}
  function getNom(){
    return $this->nom;
  }
  function setNom($nom){
    $this->nom=$nom;
  }
  function getMail(){
    return $this->mail;
  }
  function setMail($mail){
    $this->mail=$mail;
  }
  function getType(){
    return $this->type;
  }
  function setType($type){
    $this->type=$type;
  }
  function getCategorie(){
    return $this->categorie;
  }
  function setCategorie($categorie){
    $this->categorie=$categorie;
  }
  function getProduit(){
    return $this->produit;
  }
  function setProduit($produit){
    $this->produit=$produit;
  }
  function getCause(){
    return $this->cause;
  }
  function setProduit($cause){
    $this->cause=$cause;
  }
}


 ?>
