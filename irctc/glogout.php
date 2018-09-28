<?php
	require_once "gconfig.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
	session_destroy();
	header('Location: glogindex.php');
	exit();
?>