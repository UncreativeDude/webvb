<?php 
	include 'konfiguracja.php';
	if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
		header("Location: wyloguj.php");
		die();
	}
	mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
	mysql_select_db($bazaNazwa);
	$rezultat = mysql_query("SELECT id FROM maszyny WHERE nazwaMaszyny='".$_GET["nazwa"]."'");
	if(mysql_num_rows($rezultat) == 0) {
		$sql = "SELECT id FROM uzytkownicy WHERE login='".$_GET["kto"]."'";
		$rezultat = mysql_query($sql);
		$idUsera = mysql_result($rezultat,0);
		$sql = "INSERT INTO maszyny (nazwaMaszyny,idUzytkownika) VALUES ('".$_GET["nazwa"]."', '".$idUsera."')";
		mysql_query($sql);
		mysql_close();
		exec("VBoxManage createvm --name '".$_GET["nazwa"]."' --register");
		exec("VBoxManage createhd --filename '/home/koczwara/VirtualBox VMs/".$_GET["nazwa"]."/".$_GET["nazwa"]."' --size ".$_GET["dysk"]);
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --ostype '".$_GET["typ"]."'");
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --memory ".$_GET["ram"]);
		exec("VBoxManage storagectl '".$_GET["nazwa"]."' --name IDE --add ide --controller PIIX4 --bootable on");
		exec("VBoxManage storagectl '".$_GET["nazwa"]."' --name SATA --add sata --controller IntelAhci --bootable on");
		exec("VBoxManage storageattach '".$_GET["nazwa"]."' --storagectl SATA --port 0 --device 0 --type hdd --medium '/home/koczwara/VirtualBox VMs/".$_GET["nazwa"]."/".$_GET["nazwa"].".vdi'");
		exec("VBoxManage storageattach '".$_GET["nazwa"]."' --storagectl IDE --port 0 --device 0 --type dvddrive --medium '".$_GET["sciezka"]."'");
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --vram ".$_GET["vram"]." --accelerate3d off --audio alsa --audiocontroller ac97");
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic1 ".$_GET["karta1"]." --nictype1 82540EM --cableconnected1 on");
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic2 ".$_GET["karta2"]." --nictype2 82540EM --cableconnected1 on");
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic3 ".$_GET["karta3"]." --nictype3 82540EM --cableconnected1 on");
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --nic4 ".$_GET["karta4"]." --nictype4 82540EM --cableconnected1 on");
		exec("VBoxManage modifyvm '".$_GET["nazwa"]."' --vrde on --vrdeport ".$_GET["pulpitPort"]." --vrdeaddress ".$_GET["pulpitIP"]);
		exec("VBoxManage startvm '".$_GET["nazwa"]."' --type headless");
		header("Location: administracja3.php");
		die();
	}
	mysql_close();
	header("Location: administracja4.php");
	die();
 ?>