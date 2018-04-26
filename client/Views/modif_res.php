<?php
include_once "../Entities/reservation.php";
include_once "../Core/ReservationCore.php";
$rC=new ReservationCore();
if (isset($_GET['modif'])) {
  $reservation=new Reservation('',$_GET['nom'],$_GET['prenom'],$_GET['telephone'],$_GET['type'],$_GET['date']);
  $rC->modifierReservation($reservation,$_GET['id_ini']);
  echo $_GET['id_ini'];
  header('location:afficherReservation.php');
}
  ?>
