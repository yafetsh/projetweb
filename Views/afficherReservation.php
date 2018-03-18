<?PHP
include "../Core/ReservationCore.php";
$res=new ReservationCore();
$listeReservations=$res->afficherReservations();

?>
<table border="1">
<tr>
<td>Nom</td>
<td>Prénom</td>
<td>Telephone</td>
<td>Type</td>
<td>Date</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeReservations as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['date']; ?></td>

	<td><form method="POST" action="supprimerReservation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['nom']; ?>" name="nom">
	</form>
	</td>
	<td><a href="modifierReservation.php?nom=<?PHP echo $row['nom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>
