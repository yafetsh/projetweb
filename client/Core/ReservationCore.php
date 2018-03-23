<?php
include_once "../Config.php";
class ReservationCore
{

function afficherReservation(){
  include 'config.php';
  $pdo = Database::connect();
  $sql = 'SELECT * FROM reservation ORDER BY id DESC';
  foreach ($pdo->query($sql) as $row) {
           echo '<tr>';
           echo '<td>'. $row['nom'] . '</td>';
           echo '<td>'. $row['prenom'] . '</td>';
           echo '<td>'. $row['telephone'] . '</td>';
           echo '<td>'. $row['type'] . '</td>';
           echo '<td>'. $row['date'] . '</td>';

         }
        

}
function ajouterReservation($res){
  $sql="insert into reservation (nom,prenom,telephone,type,date) values (:nom, :prenom,:telephone,:type,:date)";
  $db = config::getConnexion();
  try{
      $req=$db->prepare($sql);

      $nom=$reservation->getNom();
      $prenom=$reservation->getPrenom();
      $telephone=$reservation->getTelephone();
      $type=$reservation->getType();
      $date=$reservation->getDate();
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':telephone',$telephone);
  $req->bindValue(':type',$type);
  $req->bindValue(':date',$date);

          $req->execute();

      }
      catch (Exception $e){
          echo 'Erreur: '.$e->getMessage();
      }

}*/
function supprimerReservation($nom){
  $sql="DELETE FROM reservation where nom= :nom";
      $req=$db->prepare($sql);
  $req->bindValue(':nom',$nom);
  try{
          $req->execute();
         // header('Location: index.php');
      }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
}
}

 ?>
