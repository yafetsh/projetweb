<?PHP
include "../Entities/livraison.php";
include "../Core/livraisoncore.php";

if (isset($_POST['rue']) and isset($_POST['numero']) and isset($_POST['region']) and isset($_POST['ville']) ){
$livraison1=new livraison($_POST['id'],$_POST['rue'],$_POST['numero'],$_POST['region'],$_POST['ville']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1c=new livraisoncore();
$livraison1c->ajouterlivraison($livraison1);
header('Location: livraisonclient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>