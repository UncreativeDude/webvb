<?php 
	include 'konfiguracja.php';
	
	$haslo = hash("sha256",$_GET["pwd"]);
	$sql = "INSERT INTO uzytkownicy (login, haslo) VALUES ('". $_GET["lgn"] ."', '". $haslo ."')";
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	$rezultat = mysql_query("SELECT id FROM uzytkownicy WHERE login = '".$_GET["lgn"]."'");
	if(mysql_num_rows($rezultat) == 0) {
		mysql_query($sql);
		mysql_close();
		header("Location: rejestracja4.php");
		die();
	}
	mysql_close();
	header("Location: rejestracja3.php");
	die();
 ?>