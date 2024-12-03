<?php
// Datenbank-Zugangsdaten
$server = "localhost";
$benutzer = "sven";
$passwort = "diesims2";
$dbname = "fahrradvermietung_2013";

// Verbindung herstellen
$verbindung = new mysqli($server, $benutzer, $passwort, $dbname);
?>