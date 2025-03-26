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
				<li class="active"><a href="menu.php">Twoje Konto</a></li>
				<li><a href="maszyny.php">Twoje Maszyny</a></li>
				<li><a href="ustawienia.php">Ustawienia</a></li>
				<li><a href="wyloguj.php">Wyloguj</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Jesteś zalogowany jako: <?php echo($_COOKIE['login']); ?></h1></br></br>
				<p>Witaj w panelu kontrolnym twojego konta. Wybierz odpowiednią zakładkę i rozpocznij pracę. System jest gotowy do pracy i czeka na twoje polecenia.</p></br>
				<h2>Informacje o systemie:</h2>
				<p>Połączenie: <?php echo($_SERVER['HTTP_CONNECTION']); ?></p>
				<p>Data: <?php echo(date('m/d/Y', time())); ?></p>
				<p>Godzina: <?php echo(date('H:i:s', time())); ?></p>
				<p>Adres: <?php echo($_SERVER['SERVER_ADDR']); ?></p>
				<p>Port: <?php echo($_SERVER['SERVER_PORT']); ?></p>
				</br><a href="menu.php" class="btn btn-warning" role="button">Przeładuj dane...</a>
			</div>
		</div>
		<div class="container">
			<div class="span4">
				© 2015 Jakub Biliński - All Rights Reserved
			</div>
		</div>
	</body>
</html>