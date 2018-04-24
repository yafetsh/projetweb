<?php
class livraison
{
    private $id;
  private $etat;
  private $region;
  private $ville;
  private $rue;
  private $numero;

  function __construct($id,$rue,$numero,$region,$ville)
  {
$this->id=$id;
$this->region=$region;
$this->ville=$ville;
$this->rue=$rue;
$this->numero=$numero;

}
  function getRue(){
    return $this->rue;
  }
  function setRue($rue){
    $this->rue=$rue;
  }
  function getNumero(){
    return $this->numero;
  }
  function setNumero($numero){
    $this->numero=$numero;
  }
  function getRegion(){
    return $this->region;
  }
  function setRegion($region){
    $this->region=$region;
  }
  function getVille(){
    return $this->ville;
  }
  function setVille($ville){
    $this->ville=$ville;
  }
}


 ?>
