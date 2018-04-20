<?php
include_once "../Config.php";
class ReclamationCore
{
  function afficherReclamation($r){
    //var_dump($e);
    $nom=$e->getNom();
    $prenom=$e->getPrenom();
    $mail=$e->getMail();
    $telephone=$e->getTelephone();
    $type=$e->getType();
    $cause=$e->getCause();
    $etat=$e->getEtat();


    echo "Nom: " .$nom. "<br>"; //ou bien echo("CIN :".$e->getCin. "<br>"); ou ma na3mlouch l init lfou9
    echo "Prenom :" .$prenom. "<br>";
    echo "Adresse mail:" .$mail. "<br>";
    echo "Telephone: " .$telephone. "<br>";
    echo "Type: " .$type. "<br>";
    echo "Cause: " .$cause. "<br>";
    echo "Etat de la réclamation: " .$etat. "<br>";

  }
function afficherReclamations(){
  $c=Config::getConnexion();
  $sql="SELECT * FROM reclamation";
  try{
    $liste=$c->query($sql);
    return $liste;

  }catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
  }

         }



function ajouterReclamation($reclamation){
  $sql="insert into reclamation (nom,prenom,mail,telephone,type,cause) values (:nom, :prenom,:mail,:telephone,:type,:cause)";
  $db = config::getConnexion();
  try{
      $req=$db->prepare($sql);
      $nom=$reclamation->getNom();
      $prenom=$reclamation->getPrenom();
      $mail=$reclamation->getMail();
      $telephone=$reclamation->getTelephone();
      $type=$reclamation->getType();
      $cause=$reclamation->getCause();

  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':mail',$mail);
  $req->bindValue(':telephone',$telephone);
  $req->bindValue(':type',$type);
  $req->bindValue(':cause',$cause);

          $req->execute();

      }
      catch (Exception $e){
          echo 'Erreur: '.$e->getMessage();
      }

}
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
function modifierReclamation($reclamation,$id){
  $sql="UPDATE reservation SET ID=:ID, nom=:nom,prenom=:prenom,mail=:mail,telephone=:telephone,type=:type,cause:=cause WHERE ID=:ID";

  $db = config::getConnexion();
  //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
      $req=$db->prepare($sql);
  $idd=$reservation->getId();
      $nom=$reclamation->getNom();
      $prenom=$reclamation->getPrenom();
      $mail=$reclamation->getMail();
      $telephone=$reclamation->getTelephone();
      $type=$reclamation->getType();
      $cause=$reclamation->getCause();


  $datas = array(':ID1'=>$ID1, ':ID'=>$ID, ':nom'=>$nom,':prenom'=>$prenom,':mail'=>$mail,':telephone'=>$telephone,':type'=>$type,':cause'=>$cause);
  $req->bindValue(':ID1',$ID1);
  $req->bindValue(':ID',$ID);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':mail',$mail);
  $req->bindValue(':telephone',$telephone);
  $req->bindValue(':type',$type);
  $req->bindValue(':cause',$cause);
          $s=$req->execute();

         // header('Location: index.php');
      }
      catch (Exception $e){
          echo " Erreur ! ".$e->getMessage();
 echo " Les datas : " ;
print_r($datas);
}}
      function reccupererinformations($id){
        $db = config::getConnexion();
        $sql="SELECT * from reclamation where id=$id";
        $liste=$db->query($sql);
        return $liste;
      }

}