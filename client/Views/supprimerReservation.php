<?php
    include "../Core/ReservationCore.php";
    $reservationC=new ReservationCore();
    if (isset($_POST["id"])){
    	$reservationC->supprimerReservation($_POST['id']);
      header('Location: afficherReservation.php');
    }
?>
