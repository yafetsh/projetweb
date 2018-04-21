<?php
require_once('bdd.php');
include "../../Entities/event.php";
include "../../Core/EventCore.php";
$eventC=new EventCore();
if (isset($_POST['delete']) && isset($_POST['id'])){
	$eventC->supprimerEvent($_POST['id']);

}elseif (isset($_POST['title']) && isset($_POST['color']) && isset($_POST['id'])){

	$id = $_POST['id'];
	$title = $_POST['title'];
	$color = $_POST['color'];

	$sql = "UPDATE events SET  title = '$title', color = '$color' WHERE id = $id ";


	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: calendar.php');


?>
