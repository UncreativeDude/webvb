<?php 
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	exec("vboxmanage import '".$_GET["sciezka"]."' -n > /home/koczwara/tmp.txt");
	$nazwaMaszyny = exec('cat /home/koczwara/tmp.txt | grep "Suggested VM name"|cut -d\" -f2');
	exec("VBoxManage import '".$_GET["sciezka"]."' -n");
	$rezultat = mysql_query("SELECT id FROM maszyny WHERE nazwaMaszyny='".$nazwaMaszyny."'");
	if(mysql_num_rows($rezultat) == 0) {
		$sql = "SELECT id FROM uzytkownicy WHERE login='".$_GET["kto"]."'";
		$rezultat = mysql_query($sql);
		$idUsera = mysql_result($rezultat,0);
		$sql = "INSERT INTO maszyny (nazwaMaszyny,idUzytkownika) VALUES ('".$nazwaMaszyny."', '".$idUsera."')";
		mysql_query($sql);
		mysql_close();
		exec("VBoxManage import '".$_GET["sciezka"]."'");
		exec("VBoxManage startvm '".$nazwaMaszyny."' --type headless");
		header("Location: administracja3.php");
		die();
	}
	mysql_close();
	header("Location: administracja4.php");
	die();
 ?>