<?php
class livreur
{
  private $pseudo;
  private $nom;
  private $prenom;
  private $tel;
  private $email;

  function __construct($pseudo,$nom,$prenom,$tel,$email)
  {
$this->pseudo=$pseudo;
$this->nom=$nom;
$this->prenom=$prenom;
$this->tel=$tel;
$this->email=$email;

}
function getPseudo(){
  return $this->pseudo;
}
function setPseudo($pseudo){
  $this->pseudo=$pseudo;
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
  function getTel(){
    return $this->tel;
  }
  function setTel($tel){
    $this->tel=$tel;
  }
  function getEmail(){
    return $this->email;
  }
  function setEmail($email){
    $this->email=$email;
  }
 
}


 ?>
