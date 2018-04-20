<?php
include_once "../Config.php";
class livraisoncore
{
  
	function afficherLivraison($l){
		//var_dump($e);
		$etat=$e->getEtat();
		$region=$e->getRegion();
		$ville=$e->getVille();
		$rue=$e->getRue();
		$numero=$e->getNumero();

		echo "Etat: " .$etat. "<br>"; //ou bien echo("CIN :".$e->getCin. "<br>"); ou ma na3mlouch l init lfou9
		echo "Region :" .$region. "<br>";
		echo "Ville: " .$ville. "<br>";
		echo "Rue: " .$rue. "<br>";
		echo "Numero: " .$numero. "<br>";
	}
	function afficherLivraisons(){
		$c=Config::getConnexion();
		$sql="SELECT * FROM livraison";
		try{
			$liste=$c->query($sql);
			return $liste;

		}catch(Exception $e){
			die('Erreur : ' .$e->getMessage());
		}

	}
function supprimerlivraison($id){
      $sql="DELETE FROM livraison where id= :id";
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

 function reccupererinformations($id){
      $db = config::getConnexion();
      $sql="SELECT * from livraison where id=$id";
      $liste=$db->query($sql);
      return $liste;
    }
function modifierlivraison($livraison,$idd){
      $db = config::getConnexion();
      $sql="UPDATE livraison SET rue=:rue,numero=:numero,region=:region,ville=:ville WHERE id=:idd";
      try{
      $req=$db->prepare($sql);

    
        $rue=$livraison->getRue();
        $numero=$livraison->getNumero();
        $region=$livraison->getRegion();
        $ville=$livraison->getVille();
        
    
      $req->bindValue(':idd',$idd);
      $req->bindValue(':rue',$rue);
      $req->bindValue(':numero',$numero);
      $req->bindValue(':region',$region);
      $req->bindValue(':ville',$ville);
      $s=$req->execute();
    }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }

 function ajouterlivraison($l){
        $db = config::getConnexion();
 		    $sql="insert into livraison (rue,numero,region,ville) values (:rue,:numero,:region,:ville)";
        try{
        $req=$db->prepare($sql);

        $req->bindValue(':rue',$l->getRue());
        $req->bindValue(':numero',$l->getNumero());
        $req->bindValue(':region',$l->getRegion());
        $req->bindValue(':ville',$l->getVille());

        $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

  } 
}

 ?>


