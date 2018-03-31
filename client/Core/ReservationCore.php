<?php
include_once "../Config.php";
class ReservationCore
{

function afficherReservation($reservation){
  echo "ID: ".$reservation->getId()."<br>";
  echo "Nom: ".$reservation->getNom()."<br>";
  echo "Prénom: ".$reservation->getPrenom()."<br>";
  echo "Telephone: ".$reservation->getTelephone()."<br>";
  echo "Type: ".$reservation->getType()."<br>";
  echo "Date: ".$reservation->getDate()."<br>";

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

}
function supprimerReservation($id){
  $sql="DELETE FROM reservation where id= :id";
      $req=$db->prepare($sql);
  $req->bindValue(':id',$id);
  try{
          $req->execute();
         // header('Location: index.php');
      }
      catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
}
function modifierReservation($reservation,$id){
  $sql="UPDATE employe SET ID=:ID, nom=:nom,prenom=:prenom,telephone=:telephone,type=:type WHERE ID=:ID";

  $db = config::getConnexion();
  //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
      $req=$db->prepare($sql);
  $cinn=$reservation->getId();
      $nom=$reservation->getNom();
      $prenom=$reservation->getPrenom();
      $telephone=$reservation->getTelephone();
      $type=$reservation->getType();
  $datas = array(':ID1'=>$ID1, ':ID'=>$ID, ':nom'=>$nom,':prenom'=>$prenom,':telephone'=>$telephone,':type'=>$type);
  $req->bindValue(':ID1',$ID1);
  $req->bindValue(':ID',$ID);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':telephone',$type);
  $req->bindValue(':type',$type);


          $s=$req->execute();

         // header('Location: index.php');
      }
      catch (Exception $e){
          echo " Erreur ! ".$e->getMessage();
 echo " Les datas : " ;
print_r($datas);
      }

}

 ?>
