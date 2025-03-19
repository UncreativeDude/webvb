<?php
	setcookie('login', NULL, time()-1);
	setcookie('haslo', NULL, time()-1);
	setcookie('hasloROOT', NULL, time()-1);
	header("Location: index.php");
	die();
?>