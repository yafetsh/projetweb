<?PHP
include "../../Core/livraisoncore.php";
$livraisonC=new livraisoncore();
if (isset($_POST["id"])){
	$livraisonC->supprimerlivraison($_POST["id"]);
}

?>

