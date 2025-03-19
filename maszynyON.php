<?php
	include 'konfiguracja.php';
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	$sql = "SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'";
	$rezultat = mysql_query($sql);
	if(mysql_num_rows($rezultat) != 1) {
		header("Location: wyloguj.php");
		die();
	}
	mysql_close();
	exec("VBoxManage startvm ".$_GET["info"]." -type vrdp");
	header("Location: maszyny.php");
	die();
?>