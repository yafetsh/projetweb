<?php
$connect = mysqli_connect("localhost", "root", "", "projet");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM reclamation
	WHERE nom LIKE '%".$search."%'
	OR prenom LIKE '%".$search."%'
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
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Mail</th>
							<th>Telephone</th>
							<th>Type</th>
							<th>Cause</th>
							<th>Etat</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
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
