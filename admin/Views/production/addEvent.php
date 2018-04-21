<?php


include "../../Entities/event.php";
include "../../Core/EventCore.php";
$title = $_POST['title'];
$start = $_POST['color'];
$end = $_POST['start'];
$color = $_POST['end'];

if (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['start']) && isset($_POST['end'])){

	$event1=new Event($_POST['id'],$_POST['title'],$_POST['color'],$_POST['start'],$_POST['end']);
	$event1C=new EventCore();
	$event1C->ajouterEvent($event1);

}
header('Location: '.$_SERVER['HTTP_REFERER']);


?>
