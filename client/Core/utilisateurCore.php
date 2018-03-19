<?php 
include "../config.php";
class utilisateurCore{
 function inscritption($utilisateur)
 {
            $sql="insert into membres (pseudo,mail,motdepasse) values (:pseudo,:mail,:motdepasse)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $motdepasse=$utilisateur->getMotdepasse();
        $req->bindValue(':pseudo',$pseudo);
        $req->bindValue(':mail',$mail);
        $req->bindValue(':motdepasse',$motdepasse);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
function connection($utilisateur){   
    $db = config::getConnexion();
    $mailconnect=$utilisateur->getPseudo();
    $mdpconnect=$utilisateur->getEmail();

      $requser = $db->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
return array($userexist,$requser);

}
}

?>