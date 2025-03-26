<?php
	include 'konfiguracja.php';
	
	$haslo = hash("sha256",$_GET["pwd"]);
	mysqli_connect('artkoc7548.mysql.dhosting.pl', 'seey3m_michalak', 'thi3eexohY3s', 'ange9a_michalak');
	mysqli_select_db($bazaNazwa);
	$sql = "SELECT id FROM ab_uzytkownicy WHERE login='".$_GET["lgn"]."' AND haslo='".$haslo."'"
	$lista22=mysqli_query($connect,$sql22);
	$rezultat = mysqli_query($connect,$sql);
	if(mysql_num_rows($rezultat) == 1) {
		mysqli_close();
		setcookie('login', $_GET["lgn"], time()+3600*24);
		setcookie('haslo', $haslo, time()+3600*24);
		header("Location: menu.php");
		die();
	}
	mysqli_close($connect);
	header("Location: logowanie.php");
	die();
?>