<?php 
include "../config.php";
class fideliteCore{

function afficherFidelite(){
	    $sql="SElECT * From fidelite";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
}
//affichage
function ajouterFidelite($fidelite){
	$sql="insert into fidelite (id,points) values (:id, :points)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$fidelite->getId();
        $points=$fidelite->getPoints();
   
		$req->bindValue(':id',$id);
		$req->bindValue(':points',$points);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
//ajout
function supprimerFidelite($id){
	$sql="DELETE FROM fidelite where id= :id";
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
//supprimer
function modifierFidelite($points,$id){
		$sql="UPDATE fidelite SET points=:points WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
            $req=$db->prepare($sql);

		$req->bindValue(':points',$points);	
				$req->bindValue(':id',$id);	

//req->bindValue(':cin',$cin);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
}
//modifier
}
?>