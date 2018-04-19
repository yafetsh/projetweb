<?PHP
    include "../../Entities/livreur.php";
    include "../../Core/livreurcore.php";
   
    if(isset($_GET['pseudo'])){
      $lC=new livreurcore();
      $l=$lC->reccupererinformations($_GET["pseudo"]);
      foreach ($l as $row) {
        $pseudo=$row['pseudo'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $tel=$row['tel'];
        $email=$row['email'];
        $etat=$row['etat'];
    
  ?>

  <form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>Pseudo</td>
<td><input disabled type="number" name="pseudo" value="<?PHP echo $pseudo ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Tel</td>
<td><input type="number" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="pseudo_ini" value="<?PHP echo $_GET['pseudo'];?>"></td>
</tr>
</table>
</form>
<?PHP
  }
}
if (isset($_POST['modifier'])){
  $livreur=new livreur($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['email']);
  $lC->modifierlivreur($livreur,$_POST['pseudo_ini']);
  echo $_POST['pseudo_ini'];
  header('Location: afficherlivreurs.php');
}
?>