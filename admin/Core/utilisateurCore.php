<?php 
include "../../config.php";
class utilisateurCore{
 function inscritption($utilisateur,$confirmkey)
 {    
  $confirme=0;
            $sql="insert into membre (pseudo,mail,motdepasse,confirmkey,confirme) values (:pseudo,:mail,:motdepasse,:confirmkey,:confirme)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        
        $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $motdepasse=$utilisateur->getMotdepasse();
        $req->bindValue(':pseudo',$pseudo);
        $req->bindValue(':mail',$mail);
        $req->bindValue(':motdepasse',$motdepasse);
        $req->bindValue(':confirmkey',$confirmkey);
        $req->bindValue(':confirme',$confirme);
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
   $mdpconnect=sha1($mdpconnect);
      $requser = $db->prepare("SELECT * FROM membre WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
return array($userexist,$requser);

}

function modifierUser($param,$condition,$id){
    
    $bdd = config::getConnexion(); 
    //pseudo
  if ($condition == 1) {
       $insertpseudo = $bdd->prepare("UPDATE membre SET  pseudo = ? WHERE id = ?");
       $insertpseudo->execute(array($param, $id));
  }
   //pseudo 
  
  //mail
  if ($condition == 2) {
       $insertmail = $bdd->prepare("UPDATE membre SET mail = ? WHERE id = ?");
       $insertmail->execute(array($param,$id));
  }
  //mail

  //motdepasse 
  if ($condition == 3) {
        $insertmdp = $bdd->prepare("UPDATE membre SET motdepasse = ? WHERE id = ?");
        $insertmdp->execute(array($param,$id));
  }
  //motdepasse
  }

    function afficherUsers(){
    $sql="SElECT * From membre";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }

 
function SupprimerAdmin($pseudo){
  $sql="DELETE FROM membre where pseudo= :pseudo";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':pseudo',$pseudo);
    try{
            $req->execute();
            header('Location:TabClients.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function ModifierAdmin($utilisateur,$id){
        $db = config::getConnexion();

       $pseudo=$utilisateur->getPseudo();
        $mail=$utilisateur->getEmail();
        $motdepasse=$utilisateur->getMotdepasse();

          $upseudo = $db->prepare("UPDATE membre SET pseudo = ? WHERE id= ?");
      $upseudo->execute(array($pseudo,$id));
        $umail = $db->prepare("UPDATE membre SET mail = ? WHERE id= ?");
      $umail->execute(array($mail,$id));
        $umotdepasse = $db->prepare("UPDATE membre SET motdepasse = ? WHERE id= ?");
      $umotdepasse->execute(array($motdepasse,$id));       
}
//verifier unicité de mail

function VerifierEmail($mail){
        $bdd = config::getConnexion();
            $reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();
return $mailexist;
}
//verifier unicité de mail
//Envoie de mail
function EnvoyerMail($mail,$pseudo,$key)
{
   $header="MIME-Version: 1.0\r\n";
$header.='From:"FashionMakeup.com"<support@fashionmakeup.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
    <body>
        <div align="center">
         <a href="http://localhost/integration/projetweb/client/views/confirmation.php?pseudo='.$pseudo.'&key='.$key.'">Confirmer votre compte</a>
        </div>
    </body>
</html>
';

mail($mail, "Activation de compte FashionMakeup", $message, $header);

}


//Envoie de mail

//Envoie de mail de rénitialisation de mot de passe 
function RecupererMail($pseudo,$recup_code,$recup_mail){
      $header="MIME-Version: 1.0\r\n";
         $header.='From:"fashionmakeup.com"<support@fashionmakeup.com>'."\n";
         $header.='Content-Type:text/html; charset="utf-8"'."\n";
         $header.='Content-Transfer-Encoding: 8bit';
         $message = '
         <html>
         <head>
           <title>Récupération de mot de passe - fashionmakeup.com</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>
                     
                     <div align="center">Bonjour <b>'.$pseudo.'</b>,</div>
                     cliquer <a href="http://localhost/integration/projetweb/client/views/recupererMdp.php?section=code&code='.$recup_code.'">ici</a> pour rénitialiser votre mot de passe 
                     A bientôt !
                     
                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       Ceci est un email automatique, merci de ne pas y répondre
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
         mail($recup_mail, "Récupération de mot de passe - fashionmakeup.com", $message, $header);
}
//Envoie de mail de rénitialisation de mot de passe

//Newsletter
 function VerifierNewsletter($mail){
        $bdd = config::getConnexion();
            $reqmail = $bdd->prepare("SELECT * FROM newsletter WHERE mail = ?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();
return $mailexist;
}

function AjouterNewsletter($mail){
        $bdd = config::getConnexion();
        $insertNewsletter = $bdd->prepare("INSERT INTO newsletter(mail) VALUES(?)");
        $insertNewsletter->execute(array($mail));
}

function RecupNewsletter(){
      $sql="SElECT * From newsletter";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 

}

function EnvoyerNewsletter($mail,$msg){
  $header="MIME-Version: 1.0\r\n";
$header.='From:"FashionMakeup.com"<support@fashionmakeup.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message=$msg;

mail($mail, "Newsletter FashionMakeup", $message, $header);
      
}
//Newsletter

//chat
function chat($pseudo,$message){
$bdd = config::getConnexion();
$insertmsg = $bdd->prepare('INSERT INTO chat(pseudo,message) VALUES(?, ?)');
$insertmsg->execute(array($pseudo,$message)); 
}
//chat
}
?>