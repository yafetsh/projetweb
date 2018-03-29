<?php
class livraison
{
  private $rue;
  private $numero;
  private $region;
  private $ville;

  function __construct($rue,$numero,$region,$ville)
  {
$this->rue=$rue;
$this->numero=$numero;
$this->region=$region;
$this->ville=$ville;

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
