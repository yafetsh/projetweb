<?php
$connect = mysqli_connect("localhost", "root", "", "projet"); //connecting to DB
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]); //escapes special characters in a string for use in an SQL statement
	$query = "
	SELECT * FROM reservation
	WHERE nom LIKE '%".$search."%'
	OR prenom LIKE '%".$search."%'
	OR telephone LIKE '%".$search."%'
	OR type LIKE '%".$search."%'

	";
}
else
{
	$query = "
	SELECT * FROM reservation ORDER BY id";
}
$result = mysqli_query($connect, $query); //performs a query against the database
if(mysqli_num_rows($result) > 0) //returns the number of rows in a result set, si il y a des données il va afficher ces donnés
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Telephone</th>
							<th>Type</th>
							<th>Date</th>

						</tr>';
	while($row = mysqli_fetch_array($result)) //fetches a result row as an associative array
	{
		$output .= '
			<tr>
				<td>'.$row["nom"].'</td>
				<td>'.$row["prenom"].'</td>
				<td>'.$row["telephone"].'</td>
				<td>'.$row["type"].'</td>
				<td>'.$row["date"].'</td>


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
