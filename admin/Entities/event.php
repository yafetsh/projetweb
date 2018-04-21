<?php
class Event
{
  private $id;
  private $title;
  private $color;
  private $start;
  private $end;


  function __construct($id,$title,$color,$start,$end)
  {
$this->id=$id;
$this->title=$title;
$this->color=$color;
$this->start=$start;
$this->end=$end;

}
function getId(){
  return $this->id;
}
function setId($id){
  $this->id=$id;
}
  function getTitle(){
    return $this->title;
  }
  function setTitle($title){
    $this->title=$title;
  }
  function getColor(){
    return $this->color;
  }
  function setColor($color){
    $this->color=$color;
  }
  function getStart(){
    return $this->start;
  }
  function setStart($start){
    $this->start=$start;
  }
  function getEnd(){
    return $this->end;
  }
  function setEnd($end){
    $this->end=$end;
  }

}


 ?>
