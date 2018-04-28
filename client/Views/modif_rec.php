<?php
include_once "../Entities/reclamation.php";
include_once "../Core/ReclamationCore.php";
$rC=new ReclamationCore();
if (isset($_GET['modif'])) {
  $reclamation=new Reclamation($_GET['nom'],$_GET['prenom'],$_GET['mail'],$_GET['telephone'],$_GET['type'],$_GET['cause']);
  $rC->modifierReclamation($reclamation,$_GET['id_ini']);
  echo $_GET['id_ini'];
  //header('location:afficherReclamation.php');

}
  ?>
