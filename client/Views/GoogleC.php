<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("313618241979-4hcbt4um3u2tehv6mnduq8ehuf8ck4n0.apps.googleusercontent.com");
	$gClient->setClientSecret("OEmmyHIwlSQ-ctQYbwx-lNJB");
	$gClient->setApplicationName("CPI Login Tutorial");
	$gClient->setRedirectUri("http://localhost/myFiles/PHP/views/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
