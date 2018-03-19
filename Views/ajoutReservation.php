<?PHP
include "../Entities/reservation.php";
include "../Core/ReservationCore.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['telephone']) and isset($_POST['type']) and isset($_POST['date'])){
$reservation1=new reservation($_POST['nom'],$_POST['prenom'],$_POST['telephone'],$_POST['type'],$_POST['date']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reservation1C=new ReservationCore();
$reservation1C->ajouterReservation($reservation1);
header('Location: afficherReservation.php');

}else{
	echo "vérifier les champs";
}
//*/

?>
