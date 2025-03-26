
tabela1
użytkownicy
    kolumny
    1.
    2.
    3. 

tabela2
maszyny
    kolumny
    1.
    2.
    3.                              



















##############################################################################


SELECT id FROM uzytkownicy WHERE login='".$_GET["kto"]."'
SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'
SELECT id FROM uzytkownicy WHERE login='".$_GET["lgn"]."' AND haslo='".$haslo."'
SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'
SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'
SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'
SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'
SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$_COOKIE['haslo']."'
SELECT id FROM uzytkownicy WHERE login='".$_COOKIE['login']."' && haslo='".$hasloNowe."'
UPDATE uzytkownicy SET haslo='".$hasloNowe."' WHERE login='".$_COOKIE['login']."' && haslo='".$hasloStare."'
SELECT id FROM uzytkownicy WHERE login='".$_GET["kto"]."'
SELECT id FROM maszyny WHERE nazwaMaszyny='".$nazwaMaszyny."'
UPDATE maszyny SET idUzytkownika=".$idUsera." WHERE nazwaMaszyny='".$_GET["nazwa"]."'
$_COOKIE['hasloROOT']) ||  $_COOKIE['hasloROOT'] != $prawidloweHaslo 
INSERT INTO maszyny (nazwaMaszyny,idUzytkownika) VALUES ('".$_GET["nazwa"]."', '".$idUsera."')











© 2025 DeRat Krisrot Wacław Rot III - All Rights Reserved