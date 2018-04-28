<?php 
include "../entities/utilisateur.php";
include "../core/utilisateurCore.php";
if(isset($_SESSION['id'])) {

$requser = $db->prepare("SELECT * FROM membre WHERE id = ?");
$requser->execute(array($_SESSION['id']));
$user = $requser->fetch();
$newpseudo=NULL;
$newmail=NULL;
$newmdp1=NULL;
$newmdp2=NULL;
if(isset($_POST['modifier']))
{
   if(isset($_POST['newpseudo']))
   {
      $newpseudo = $_POST['newpseudo'];
   }
   if(isset($_POST['newmail']))
   {
      $newmail = $_POST['newmail'];
   }
   if(isset($_POST['newmdp1']))
   {
      $newmdp1 = $_POST['newmdp1'];
   }
   if(isset($_POST['newmdp2']))
   {
      $newmdp2 = $_POST['newmdp2'];
   }
$utilisateur1 = new utilisateur($newpseudo,$newmail,$newmdp1);
$utilisateurC = new utilisateurCore();
$utilisateurC->modifier($utilisateur,$user,$newmdp2);

}
}

?>
<!DOCTYPE html>
<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2> Edition de mon profile</h2>
         <div align="left">
         <form method="POST">
            <label style="font-weight: bold;">Pseudo</label>
            <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo'];?>"> <br/><br/>
            <label style="font-weight: bold;">Mail</label>
            <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail'];?>"> <br/><br/>
            <label style="font-weight: bold;">Mot de passe</label>
            <input type="password" name="newmdp1" placeholder="Mot de passe"> <br/><br/>
            <label style="font-weight: bold;">Confirmer votre mot de passe</label>
            <input type="password" name="newmdp2" placeholder="Confirmation de mot de passe"> <br/><br/>
            <input type="submit" value="Mettre à jour mon profil !" name="modifier">
         </form>
         <?php if(isset($msg)){ echo $msg;} ?>
         </div>
      </div>
   </body>
</html>

