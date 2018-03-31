<div >

		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Telephone</th>
					<th>Type</th>
					<th>Date</th>
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
			<?php
			 include 'config.php';
			 $pdo = Database::connect();
			 $sql = 'SELECT * FROM reservation ORDER BY id DESC';
			 foreach ($pdo->query($sql) as $row) {
								echo '<tr>';
								echo '<td>'. $row['nom'] . '</td>';
								echo '<td>'. $row['prenom'] . '</td>';
								echo '<td>'. $row['telephone'] . '</td>';
								echo '<td>'. $row['type'] . '</td>';
								echo '<td>'. $row['date'] . '</td>';


								echo '<td width=auto>';
														 echo '<a  href="afficherReservation.php?id='.$row['id'].'">Afficher</a>';
																	 echo ' ';
																	 echo '<a  href="modifierReservation.php?id='.$row['id'].'">Modifier</a>';
													echo ' ';
													echo '<a href="supprimerReservation.php?id='.$row['id'].'">Annuler</a>';
									 echo '</td>';
											echo '</tr>';
			 }
			 Database::disconnect();
			?>
			</tbody>
</table>
</div>
