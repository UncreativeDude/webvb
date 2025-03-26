<?php
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	exec("VBoxManage controlvm '".$_GET["info"]."' poweroff");
	header("Location: administracja3.php");
	die();
?>