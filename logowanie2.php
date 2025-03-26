<?php
	include 'konfiguracja.php';
	
	$haslo = hash("sha256",$_GET["pwd"]);
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	$rezultat = mysql_query("SELECT id FROM uzytkownicy WHERE login='".$_GET["lgn"]."' AND haslo='".$haslo."'");
	if(mysql_num_rows($rezultat) == 1) {
		mysql_close();
		setcookie('login', $_GET["lgn"], time()+3600*24);
		setcookie('haslo', $haslo, time()+3600*24);
		header("Location: menu.php");
		die();
	}
	mysql_close();
	header("Location: logowanie.php");
	die();
?>