<?PHP
include "../Core/ReservationCore.php";
$ReservationCore=new ReservationCore();
if (isset($_POST["nom"])){
	$ReservationCore->supprimerReservation($_POST["nom"]);
	header('Location: reclamationadmin.php');
}

?>
