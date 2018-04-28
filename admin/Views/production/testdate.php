<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fashion MakeUp</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(document).ready(function(){
  	$('#advdiv').hide()
    $( "#datepicker" ).datepicker({
      dateFormat: 'yy-mm-dd',
      onSelect: function() {
       $("#advdiv").fadeToggle('fast'); }});
  } );
  </script>
</head>
<body>
 <?PHP
    include "../../Entities/livraison.php";
    include "../../Core/livraisoncore.php";
   

    if(isset($_GET['id'])){
      $lC=new livraisoncore();
      $l=$lC->reccupererinformations($_GET["id"]);
      foreach ($l as $row) {
        $dateLivraison=$row['datelivraison'];
         $pseudoLivreur=$row['pseudoLivreur'];
        $id=$row['id'];
    
      }
    }
      include "../../Core/livreurcore.php";
$livreur3C=new livreurcore();
$listePseudos=$livreur3C->afficherPseudoslivreurs();

  ?>
  	<form method="GET" action="aff_livraison.php">
<p>Date: <input type="text" name="datelivraison" id="datepicker"></p>
<div id="advdiv">

  <table>
<caption>Choisir un livreur</caption>
<tr>
<td>ID_Livraison</td>
<td><input disabled type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>

</table>

  <table>
    <tr>
      <td>Pseudo_livreur</td>
      <td>
        <select name="pseudoLivreur" >
              <option><?PHP echo $pseudoLivreur ?></option>
          <?PHP
              foreach($listePseudos as $row){
                ?>
                <option>
                <?PHP echo $row['pseudo']; ?>
              </option>
              
          <?PHP
            }
?>
  </td>
  </tr>
          </select>
      
    

  </table>

<table>
<tr>
<td><input type="submit" name="modif" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
</div>
 
</body>
</html>