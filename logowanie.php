<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'konfiguracja.php';
			mysql_connect($bazaAdres,$bazaLogin,$basaHaslo);
			mysql_select_db($bazaNazwa);
			$sql = "SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'";
			$rezultat = mysql_query($sql);
			if(mysql_num_rows($rezultat) == 1) {
				mysql_close();
				header("Location: menu.php");
				die();
			}
			mysql_close();
		?>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>
	<body>
	<div class="navbar">
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand">Zarządzanie wirtualnymi maszynami przez stronę WWW</a>
			</div>
			<div class="collapse navbar-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.php">Główna Strona</a></li>
				<li><a href="rejestracja.php">Rejestracja</a></li>
				<li class="active"><a href="logowanie.php">Logowanie</a></li>
				<li><a href="administracja.php">Administracja</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Logowanie:</h1></br>
				<form action="logowanie2.php" method="get">
					<div class="form-group">
						<label for="lgn">Login: </label> <input type="text" name="lgn"><br>
					</div>
					<div class="form-group">
						<label for="pwd">Haslo: </label> <input type="password" name="pwd"><br>
					</div>
					<div class="form-group">
						<input type="submit" value="Zaloguj się" class="btn btn-primary">
					</div>
				</form>
			</div>
		</div>
		<div class="container">
			<div class="span4">
				© 2015 Jakub Biliński - All Rights Reserved
			</div>
		</div>
	</body>
</html>