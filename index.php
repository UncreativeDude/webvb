<!DOCTYPE html>
<html lang="en">
	<head>
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
				<li class="active"><a href="index.php">Główna Strona</a></li>
				<li><a href="rejestracja.php">Rejestracja</a></li>
				<li><a href="logowanie.php">Logowanie</a></li>
				<li><a href="administracja.php">Administracja</a></li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
		<div class="container">
			<div class="jumbotron">
				<h1>Witaj!</h1>
				<p>Projekt ten ma na celu odciążenie administratora serwera od zarządzania maszynami wirtualnymi i przekazać część obowiązków na osoby pracujące wirtualnymi maszynami. Na serwerze uruchomiony jest VirtualBox razem z określoną ilością maszyn wirtualnych, tymczasem na komputerach klienckich uruchomiona jest strona WWW do zarządzania ich serwerem, który został im przydzielony przez administratora. Możliwa jest praca na takiej maszynie wirtualnej za pomocą Zdalnego Pulpitu (tylko w przypadku odpowiedniej konfiguracji). Korzystanie z tej metody jest bardzo efektywne, ponieważ nie wymagana jest instalacja na każdym komputerze klienckim maszyny wirtualnej wraz z wybranym systemem operacyjnym, a dodatkowo pliki dostępne są z różnych komputerów bez potrzeby kopiowania plików odpowiedzialnych za maszyny wirtualne. Administrator posiada również całkowitą kontrolę nad tym co się dzieję na tych maszynach oraz może w dowolnym momencie odebrać użytkownikowi dostęp do danej maszyny wirtualnej. Zarządzanie serwerem jest bardzo proste i przejrzyste, co przyśpiesza pracę. System ten został zaprojektowany pod system Debian w wersji 7.8.0-i386, ale powinien działać na również innych systemach operacyjnych z rodziny Linux.</p>
				<a href="rejestracja.php" class="btn btn-large btn-success">Rozpocznij...</a>
			</div>
		</div>
		<div class="container">
			<div class="span4">
				© 2015 Jakub Biliński - All Rights Reserved
			</div>
		</div>
	</body>
</html>