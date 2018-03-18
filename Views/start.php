<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Affiche</title>
  </head>
  <body>
    <div id="afficheEmp">
      <?php
      include_once "../Core/ReservationCore.php";
      include_once "../Entities/reservation.php";
      $core=new ReservationCore();
      $res=new Reservation('12345','Shil','Yafet',12,55);
      $core->afficherReservation($res);
      echo "</br>";


       ?>

    </div>
  </body>
</html>
