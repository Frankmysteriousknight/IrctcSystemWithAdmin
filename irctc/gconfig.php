<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("687499962206-9pvnh05oracg984smjb9q51c3u0k17bf.apps.googleusercontent.com");
	$gClient->setClientSecret("m5qfLzG-JXxz6xWaaQsPGk8J");
	$gClient->setApplicationName("CPI Login");
	$gClient->setRedirectUri("http://localhost/irctc/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
