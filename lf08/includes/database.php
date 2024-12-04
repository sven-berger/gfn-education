<?php
// Datenbank-Zugangsdaten
$server = "localhost";
$benutzer = "gfn_ftp1";
$passwort = "-c3?8HvD";
$dbname = "gfn_system";

// Verbindung herstellen
$verbindung = new mysqli($server, $benutzer, $passwort, $dbname);
?>