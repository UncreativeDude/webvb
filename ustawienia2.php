<?php
	include 'konfiguracja.php';
	$hasloStare = hash("sha256",$_GET["stare"]);
	$hasloNowe = hash("sha256",$_GET["nowe"]);
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	$sql = "SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$hasloNowe."'";
	$rezultat = mysql_query($sql);
	if(mysql_num_rows($rezultat) != 1) {
		header("Location: ustawienia.php");
		die();
	}
	mysql_query("UPDATE uzytkownicy SET haslo='".$hasloNowe."' WHERE login='".$_COOKIE['login']."' && haslo='".$hasloStare."'");
	mysql_close();
	header("Location: wyloguj.php");
	die();
?>