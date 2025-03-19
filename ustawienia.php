<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
			if(!isset($_COOKIE['login']) && !isset($_COOKIE['haslo'])) {
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
				<li><a href="menu.php">Twoje Konto</a></li>
				<li><a href="maszyny.php">Twoje Maszyny</a></li>
				<li class="active"><a href="ustawienia.php">Ustawienia</a></li>
				<li><a href="wyloguj.php">Wyloguj</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Ustawienia konta:</h1>
				<p>Zmiana hasła:</p>
				<form action="ustawienia2.php" method="get">
					<div class="form-group">
						<label for="lgn">Stare hasło: </label> <input type="password" name="stare"><br>
					</div>
					<div class="form-group">
						<label for="pwd">Nowe hasło: </label> <input type="password" name="nowe"><br>
					</div>
					<div class="form-group">
						<input type="submit" value="Zmień hasło" class="btn btn-primary">
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