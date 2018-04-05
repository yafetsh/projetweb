<?php
$connect = mysqli_connect("localhost", "root", "", "projet"); //connecting to DB
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]); //escapes special characters in a string for use in an SQL statement
	$query = "
	SELECT * FROM reclamation
	WHERE nom LIKE '%".$search."%'
	OR prenom LIKE '%".$search."%'
	OR id LIKE '%".$search."%'
	OR mail LIKE '%".$search."%'
	OR telephone LIKE '%".$search."%'
	OR type LIKE '%".$search."%'
	OR etat LIKE '%".$search."%'

	";
}
else
{
	$query = "
	SELECT * FROM reclamation ORDER BY id";
}
$result = mysqli_query($connect, $query); //performs a query against the database
if(mysqli_num_rows($result) > 0) //returns the number of rows in a result set, si il y a des données il va afficher ces donnés
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
						<th>ID</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Mail</th>
							<th>Telephone</th>
							<th>Type</th>
							<th>Cause</th>
							<th>Etat</th>

						</tr>';
	while($row = mysqli_fetch_array($result)) //fetches a result row as an associative array
	{
		$output .= '
			<tr>
			<td>'.$row["id"].'</td>
				<td>'.$row["nom"].'</td>
				<td>'.$row["prenom"].'</td>
				<td>'.$row["mail"].'</td>
				<td>'.$row["telephone"].'</td>
				<td>'.$row["type"].'</td>
				<td>'.$row["cause"].'</td>
				<td>'.$row["etat"].'</td>


			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
