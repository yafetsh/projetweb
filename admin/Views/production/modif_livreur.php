<?PHP
     include "../../Entities/livreur.php";
    include "../../Core/livreurcore.php";
if (isset($_POST['modifier'])){
	 $lC=new livreurcore();
  $livreur=new livreur($_POST['pseudo'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['email']);
  $lC->modifierlivreur($livreur,$_POST['pseudo_ini']);
  echo $_POST['pseudo_ini'];
 header("Location: afficherlivreurs.php");
}
?>