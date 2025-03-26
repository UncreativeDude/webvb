<?php
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	exec("VBoxManage startvm ".$_GET["info"]." -type vrdp");
	header("Location: administracja3.php");
	die();
?>