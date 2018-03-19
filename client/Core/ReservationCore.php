<?php
include_once "../Config.php";
class ReservationCore
{
function afficherReservation($r){
  $nom=$r->getNom();
  $prenom=$r->getPrenom();
  $telephone=$r->getTelephone();
  $type=$r->getType();
  $date=$r->getDate();
  echo "Nom : " .$nom.  "</br>";
  echo "Prénom : " .$prenom. "</br>";
  echo "Telephone : " .$telephone. "</br>";
  echo "Type : " .$type. "</br>";
  echo "Date : " .$date. "</br>";
}
function afficherReservations(){
  $c=Config::getConnexion();
$sql="SELECT * FROM reservation";
try {
  $liste=$c->query($sql);
  return $liste;
} catch (\Exception $r) {
die('Erreur :'.$r.getMessage());
}

}
function ajouterReservation($reservationreservation){
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

}
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
