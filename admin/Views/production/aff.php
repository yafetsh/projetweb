<?PHP
    include "../../Entities/livraison.php";
    include "../../Core/livraisoncore.php";
    if(isset($_GET['id'])){
   $lC=new livraisoncore();
 $l=$lC->reccupererinformations($_GET["id"]);
      foreach ($l as $row) {

 $date=$row['date'];
?>
<form method="POST">
<td>date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>


<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</form>