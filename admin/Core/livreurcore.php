<?php
include_once "../../config.php";
class livreurcore
	{
		function afficherLivreur($l){
		//var_dump($e);
		$pseudo=$e->getPseudo();
		$nom=$e->getNom();
		$prenom=$e->getRegion();
		$tel=$e->getTel();
		$email=$e->getEmail();

		echo "Pseudo" .$pseudo. "<br>";
		echo "Nom: " .$nom. "<br>"; //ou bien echo("CIN :".$e->getCin. "<br>"); ou ma na3mlouch l init lfou9
		echo "Prenom :" .$prenom. "<br>";
		echo "Tel: " .$tel. "<br>";
		echo "Email: " .$email. "<br>";
	}
	function afficherLivreurs(){
		$c=Config::getConnexion();
		$sql="SELECT * FROM livreur";
		try{
			$liste=$c->query($sql);
			return $liste;

		}catch(Exception $e){
			die('Erreur : ' .$e->getMessage());
		}

	}
	function afficherLivreursselondisponibilité(){
		$c=Config::getConnexion();
		$sql="SELECT * FROM livreur where etat like 'disponible'";
		try{
			$liste=$c->query($sql);
			return $liste;

		}catch(Exception $e){
			die('Erreur : ' .$e->getMessage());
		}
	}


	function modifierlivreur($livreur,$nom){
			$db = config::getConnexion();
			$sql="UPDATE livreur SET nom=:nomm,prenom=:prenom,tel=:tel,email=:email WHERE nom=:nom";
			$req=$db->prepare($sql);

        	$nomm=$livreur->getNom();
       		$prenom=$livreur->getPrenom();
        $tel=$livreur->getTel();
        $email=$livreur->getEmail();
		$datas = array(':nomm'=>$nomm, ':nom'=>$nom,':prenom'=>$prenom,':tel'=>$tel,':email'=>$email);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel',$tel);
		$req->bindValue(':email',$email);
		  $s=$req->execute();
			
		}
		
		function ajouterlivreur($l){
			$db = config::getConnexion();
			$sql="insert into livreur (nom,prenom,tel,email) values (:nom,:prenom,:tel,:email)";
			try{
			$req=$db->prepare($sql);

			$req->bindValue(':nom',$l->getNom());
			$req->bindValue(':prenom',$l->getPrenom());
			$req->bindValue(':tel',$l->getTel());
			$req->bindValue(':email',$l->getEmail());
			
			$req->execute();
			 }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

		}
		function supprimerlivreur($pseudo){
  		$sql="DELETE FROM livreur where pseudo= :pseudo";
  		$db = config::getConnexion();
      	$req=$db->prepare($sql);
  		$req->bindValue(':pseudo',$pseudo);
  		try{
          $req->execute();
         // header('Location: index.php');
      	}
      	catch (Exception $e){
          die('Erreur: '.$e->getMessage());
      }
		}


		function reccupererinformations($pseudo){
			$db = config::getConnexion();
			$sql="SELECT * from livreur where pseudo=$pseudo";
			$liste=$db->query($sql);
			return $liste;
		}


}
  ?>