<?php
	include 'konfiguracja.php';
	$conn = new mysqli($bazaAdres, $bazaLogin, $basaHaslo, $bazaNazwa);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$login = $_GET['lgn'];
	$haslo = hash('sha256', $_GET['pwd']);
	$stmt = $conn->prepare("SELECT id FROM uzytkownicy WHERE login = ? AND haslo = ?");
	$stmt->bind_param("ss", $login, $haslo);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows == 1) {
		setcookie('login', $login, time() + 3600 * 24, "/");
		setcookie('haslo', $haslo, time() + 3600 * 24, "/");
		header("Location: menu.php");
		die();
	} else {
		header("Location: logowanie.php");
		die();
	}
	$stmt->close();
	$conn->close();
?>
