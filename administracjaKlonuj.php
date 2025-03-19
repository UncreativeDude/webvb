<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			include 'konfiguracja.php';
			if(!isset($_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo ) {
				header("Location: wyloguj.php");
				die();
			}
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
				<li><a href="logowanie.php">Logowanie</a></li>
				<li class="active"><a href="administracja.php">Administracja</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Klonowanie maszyny:</h1>
				<form action="administracjaKlonuj2.php" method="get">
				<div class="form-group">
					<label for="lgn">Nazwa Maszyny: </label> <input type="text" name="nazwa" value="<?php echo($_GET["info"]); ?>" readonly><br>
				</div>
				<div class="form-group">
					<label for="lgn">Ilość kopii: </label> <input type="text" name="kopii"><br>
				</div>
				<div class="form-group">
					<label for="lgn">Pulpit zdalny port ([podany port] + [numer klonu]): </label> <input type="text" name="portrdp"><br>
				</div>
				<div class="form-group">
					<label for="lgn">Pulpit zdalny IP:: </label> <input type="text" name="iprdp"><br>
				</div>
				<div class="checkbox">
					<label><input type="checkbox" value="0101" name="linked">Tryb linked</label>
				</div>
				<div class="form-group">
					<input type="submit" value="Wykonaj" class="btn btn-success">
					<a href="administracja3.php" class="btn btn-danger" role="button">Anuluj</a>
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