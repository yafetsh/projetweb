<?php 
class fidelite 
{
    private $id;
    private $points;
function __construct($id,$points){
          $this->id=$id;
          $this->points=$points;
  }

	
//Getters

function getId(){
  return $this->id;
}

function getPoints(){
  return $this->points;
}

//Getters

}


?>