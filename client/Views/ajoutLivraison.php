<?PHP
include "../Entities/livraison.php";
include "../Core/livraisoncore.php";
    if ( !empty($_POST)) { 
        $rueError = null; 
        $numeroError = null;
        $regionError =  null;
        $villeError = null;
        $rue = $_POST['rue']; 
        $numero = $_POST['numero'];
        $region = $_POST['region']; 
        $ville= $_POST['ville']; 
        $valid = true;
         if (empty($rue)) {
        $rueError = '*Champs requis';
        $valid = false;
    }
    if (empty($numero)) {
        $numeroError = '*Champs requis';
        $valid = false;
    }
    if (empty($region)) {
        $telError = '*Champs requis';
        $valid = false;
    }
    if (empty($ville)) {
        $villeError = '*Champs requis';
        $valid = false;
    }
 else if (isset($_POST['rue']) and isset($_POST['numero']) and isset($_POST['region']) and isset($_POST['ville']) ){
$livraison1=new livraison($_POST['id'],$_POST['rue'],$_POST['numero'],$_POST['region'],$_POST['ville']);
$livraison1c=new livraisoncore();
$livraison1c->ajouterlivraison($livraison1);
header('Location: livraisonclient.php');
	
}
}
//*/

?>