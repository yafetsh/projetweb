<?php
include_once "../Config.php";
class ReservationCore
{
  function afficherReservation($r){
    //var_dump($e);
    $nom=$r->getNom();
    $prenom=$r->getPrenom();
    $telephone=$r->getTelephone();
    $type=$r->getType();
    $date=$r->getDate();

    echo "Nom: " .$nom. "<br>"; //ou bien echo("CIN :".$e->getCin. "<br>"); ou ma na3mlouch l init lfou9
    echo "Prenom :" .$prenom. "<br>";
    echo "Telephone: " .$telephone. "<br>";
    echo "Type: " .$type. "<br>";
    echo "Date: " .$date. "<br>";
  }
function afficherReservations(){
  $c=Config::getConnexion();
  $sql="SELECT * FROM reservation";
  try{
    $liste=$c->query($sql);
    return $liste;

  }catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
  }

         }



function ajouterReservation($reservation){
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
  $db = config::getConnexion();
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

  $sql="UPDATE reservation SET id=:idd, nom=:nom,prenom=:prenom,telephone=:telephone,type=:type,date=:date, WHERE id=:id";

  $db = config::getConnexion();
  //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
      $req=$db->prepare($sql);
      $idd=$reservation->getId();
      $nom=$reservation->getNom();
      $prenom=$reservation->getPrenom();
      $telephone=$reservation->getTelephone();
      $type=$reservation->getType();
      $date=$reservation->getDate();
      $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':prenom'=>$prenom,':telephone'=>$telephone,':type'=>$type,':date'=>$date);

  $req->bindValue(':idd',$idd);
  $req->bindValue(':id',$id);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':telephone',$telephone);
  $req->bindValue(':type',$type);
  $req->bindValue(':date',$date);
          $s=$req->execute();
      }
      catch (Exception $e){
          echo " Erreur ! ".$e->getMessage();
 echo " Les datas : " ;
print_r($datas);
}}


      function reccupererinformations($id){
        $db = config::getConnexion();
        $sql="SELECT * from reservation where id=$id";
        $liste=$db->query($sql);
        return $liste;
      }

}
