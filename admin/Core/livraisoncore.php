<?php
include_once "../../config.php";
class livraisoncore
{
	function afficherLivraison($l){
		//var_dump($e);
		$type=$e->getType();
		$region=$e->getRegion();
		$ville=$e->getVille();
		$rue=$e->getRue();
		$numero=$e->getNumero();

		echo "Type: " .$type. "<br>"; //ou bien echo("CIN :".$e->getCin. "<br>"); ou ma na3mlouch l init lfou9
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
}
function supprimerlivraison($id){
  $sql="DELETE FROM livraison where id= :id";
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



 function ajouterLivraison($l){
	$sql="INSERT INTO `livraison`( `rue`, `numero`,`region`, `ville`,) VALUES (:r,:n,:re,:v)";
	$db=config::getConnexion();
	try{
		$req=$db->prepare($sql);
		$req->bindValue(":r",$e->getRue());
		$req->bindValue(":n",$e->getNumero());
		$req->bindValue(":re",$e->getRegion());
		$req->bindValue(":v",$e->getVille());
		
		$req->execute();
	}catch(Exception $e){
		die ('Erreur : '.$e->getMessage());
	}
}


 ?>


