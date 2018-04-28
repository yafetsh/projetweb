<?php 
include "../config.php";
$bdd = config::getConnexion();
$allmsg = $bdd->query('SELECT * FROM chat');
while ($msg = $allmsg->fetch()) {
?>
<b> <?php echo $msg['pseudo'];?> : </b><?php echo $msg['message'] ?>  <br>
<?php 
}
?>