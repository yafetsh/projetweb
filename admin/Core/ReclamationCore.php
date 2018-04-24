<?php
include_once "../../Config.php";
class ReclamationCore
{
function afficherReclamation($rec){
  $nom=$rec->getNom();
  $prenom=$rec->getPrenom();
  $mail=$rec->getMail();
  $telephone=$rec->getTelephone();
  $type=$rec->getType();
  $cause=$rec->getCause();
  $etat=$rec->getEtat();

  echo "Nom : " .$nom.  "</br>";
  echo "Prénom : " .$prenom. "</br>";
  echo "Adresse Mail : " .$mail. "</br>";
  echo "Telephone : " .$telephone. "</br>";
  echo "Type : " .$type. "</br>";
  echo "Cause de réclamation : " .$cause. "</br>";
  echo "Etat : " .$etat. "</br>";

}
function afficherReclamations(){
  $c=Config::getConnexion();
$sql="SELECT * FROM reclamation";
try {
  $liste=$c->query($sql);
  return $liste;
} catch (\Exception $r) {
die('Erreur :'.$r.getMessage());
}

}
/*function ajouterReservation($reservationreservation){
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
function supprimerReclamation($id){
  $sql="DELETE FROM reclamation where id= :id";
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
function validerReclamation()
{

}
}

 ?>
