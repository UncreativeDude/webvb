<?php
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	exec("VBoxManage unregistervm '".$_GET["info"]."' --delete");
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	mysql_query("DELETE FROM maszyny WHERE nazwaMaszyny='".$_GET["info"]."'");
	mysql_close();
	header("Location: administracja3.php");
	die();
?>