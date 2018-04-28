<?php  
include "../config.php";

$bdd = config::getConnexion();

if (isset($_GET['pseudo'],$_GET['key']) AND !empty($_GET['pseudo']) AND !empty($_GET['key'])) {
$pseudo = $_GET['pseudo'];
$key = $_GET['key'];
$requser = $bdd->prepare("SELECT * FROM membre WHERE pseudo = ? AND confirmkey = ?");
$requser->execute(array($pseudo,$key));
$userexist = $requser->rowCount();
if ($userexist==1) {
	$user = $requser->fetch();
	if ($user['confirme'] == 0) {
		$updateuser = $bdd->prepare("UPDATE membre SET confirme = 1 WHERE pseudo=? AND confirmkey=?");
		$updateuser->execute(array($pseudo,$key));
		echo "votre compte à bien été confirmé !";
	}else{
		echo "votre compte est déja confirmé !";
	}
}else { 
echo "L'utilisateur n'existe pas !";
}

}

?>