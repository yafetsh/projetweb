<?php 
$bdd = config::getConnexion(); 
$temps_session = 15;
$temps_actuel = date("U");
$ip_user = $_SERVER['REMOTE_ADDR'];

$req_ip_exist = $bdd->prepare('SELECT * FROM online WHERE ip_user = ?');
$req_ip_exist->execute(array($ip_user));
 $ip_existe = $req_ip_exist->rowCount(); 
  if ($ip_existe == 0) {
  	 $add_ip = $bdd->prepare('INSERT INTO online(ip_user,time) VALUES(?,?)');
  	 $add_ip->execute(array($ip_user,$temps_actuel));
  } else{
  	$update_ip=$bdd->prepare('UPDATE online SET time = ? WHERE ip_user = ?');
    $update_ip->execute(array($temps_actuel,$ip_user));
  }

      $session_delete_time = $temps_actuel - $temps_session;
      $del_ip = $bdd->prepare('DELETE FROM online WHERE time<?');
      $del_ip->execute(array($session_delete_time));
      $show_user_nbr = $bdd->query('SELECT * FROM online');
      $user_nbr = $show_user_nbr->rowCount();
?>