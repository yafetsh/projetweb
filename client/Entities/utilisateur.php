<?php 

class utilisateur 
{
    private $email;
    private $motdepasse;
    private $pseudo;
function __construct($pseudo,$email,$motdepasse){

          $this->pseudo=$pseudo;
          $this->email=$email;
          $this->motdepasse=$motdepasse;

  }

	
//Getters

function getEmail(){
  return $this->email;
}

function getMotdepasse(){
  return $this->motdepasse;
}

function getPseudo(){
   return $this->pseudo;
}
//Getters

//Setters
function setEmail($email){
  $this->email=$email;
}
function setMotdepasse($motdepasse){
 $this->motdepasse=$motdepasse;
}
function setPseudo($pseudo){
  $this->pseudo=$pseudo;
}
//Setters
}

?>