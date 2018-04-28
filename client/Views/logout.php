<?php
	require_once "GoogleC.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	header('Location: signup.php');
	exit();
?>