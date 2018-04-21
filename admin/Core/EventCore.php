<?php
include_once "../../config.php";
class EventCore
{
function ajouterEvent($event){
  $sql="insert into events (title,color,start,end) values (:title, :color,:start,:end)";
  $db = config::getConnexion();
  try{
      $req=$db->prepare($sql);

      $title=$event->getTitle();
      $color=$event->getColor();
      $start=$event->getStart();
      $end=$event->getEnd();
  $req->bindValue(':title',$title);
  $req->bindValue(':color',$color);
  $req->bindValue(':start',$start);
  $req->bindValue(':end',$end);

          $req->execute();

      }
      catch (Exception $e){
          echo 'Erreur: '.$e->getMessage();
      }
}
function supprimerEvent($id){
  $sql="DELETE FROM events where id= :id";
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
function afficherEvents(){
  $c=Config::getConnexion();
  $sql="SELECT * FROM events";
  try{
    $liste=$c->query($sql);
    return $liste;

  }catch(Exception $e){
    die('Erreur : ' .$e->getMessage());
  }

         }

function recupererEvent($id){
       		$sql="SELECT * from employe where id=$id";
       		$db = config::getConnexion();
       		try{
       		$liste=$db->query($sql);
       		return $liste;
       		}
               catch (Exception $e){
                   die('Erreur: '.$e->getMessage());
               }
       	}


function modifierEvent(){
           $sql="UPDATE events SET id=:idd, title=:title,color=:color,start=:start,end=:end WHERE id=:id";

           $db = config::getConnexion();
           //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
       try{
               $req=$db->prepare($sql);
               $idd=$event->getId();
               $title=$event->getTitle();
               $color=$event->getColor();
               $start=$event->getStart();
               $end=$event->getEnd();
           $datas = array(':idd'=>$idd, ':id'=>$id, ':title'=>$title,':color'=>$color,':start'=>$start,':end'=>$end);
           $req->bindValue(':idd',$idd);
           $req->bindValue(':id',$id);
           $req->bindValue(':title',$title);
           $req->bindValue(':color',$color);
           $req->bindValue(':start',$start);
           $req->bindValue(':end',$end);


                   $s=$req->execute();

                  // header('Location: index.php');
               }
               catch (Exception $e){
                   echo " Erreur ! ".$e->getMessage();
          echo " Les datas : " ;
         print_r($datas);
               }
         }
}
 ?>
