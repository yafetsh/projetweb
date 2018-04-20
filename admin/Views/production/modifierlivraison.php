<?PHP
    include "../../Entities/livraison.php";
    include "../../Core/livraisoncore.php";
   
    if(isset($_GET['id'])){
      $lC=new livraisoncore();
      $l=$lC->reccupererinformations($_GET["id"]);
      foreach ($l as $row) {
        $id=$row['id'];
        $rue=$row['rue'];
        $numero=$row['numero'];
        $region=$row['region'];
        $ville=$row['ville'];
        $etat=$row['etat'];
    
  ?>

  <form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>Id_livraison</td>
<td><input disabled type="number" name="id" value="<?PHP echo $id ?>"></td>
<td><input  name="id"  value="<?PHP echo $id ?>" hidden></td>
</tr>
<tr>
<td>Rue</td>
<td><input type="text" name="rue" value="<?PHP echo $rue ?>"></td>
</tr>
<tr>
<td>Numero</td>
<td><input type="number" name="numero" value="<?PHP echo $numero ?>"></td>
</tr>
<tr>
<td>Region</td>
<td><input type="text" name="region" value="<?PHP echo $region ?>"></td>
</tr>
<tr>
<td>Ville</td>
<td><input type="text" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>
<tr>
<td>Etat</td>
<td><input type="text" name="etat" value="<?PHP echo $etat ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
  }
}
if (isset($_POST['modifier'])){
  $livraison=new livraison($_POST['id'],$_POST['rue'],$_POST['numero'],$_POST['region'],$_POST['ville'],$_POST['etat']);
  $lC->modifierlivraison($livraison,$_POST['id_ini']);
  echo $_POST['id_ini'];
 header("Location: afficherlivraisons.php");
}
?>