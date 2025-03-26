<?php
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	exec("vboxmanage snapshot ".$_GET["nazwa"]." take czysty");
	for ($i = 0; $i < $_GET["kopii"]; $i++)
	{
		$sql = "INSERT INTO maszyny (nazwaMaszyny,idUzytkownika) VALUES ('".$_GET["nazwa"]."_".$i."', '')";
		mysql_query($sql);
		if($_GET["linked"] == "0101")
		{
			exec("VBoxManage clonevm '".$_GET["nazwa"]."' --snapshot czysty --options link --name '".$_GET["nazwa"]."_".$i."' --register");
		}
		else
		{
			exec("VBoxManage clonevm '".$_GET["nazwa"]."' --snapshot czysty --name '".$_GET["nazwa"]."_".$i."' --register");
		}
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."_".$i."' --vrde on --vrdeport ".$_GET["portrdp"]." --vrdeaddress ".$_GET["iprdp"]);
	}
	mysql_close();
	header("Location: administracja3.php");
	die();
?>