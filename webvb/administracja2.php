<?php
	include 'konfiguracja.php';
	$haslo = hash("sha256",$_GET["pwd"]);
	if ($haslo == $prawidloweHaslo) {
		setcookie('hasloROOT', $haslo, time()+3600*24);
		header("Location: administracja3.php");
		die();
	}
	header("Location: administracja.php");
	die();
?>