<?php
// Datenbank-Zugangsdaten
$server = "116.202.66.48";
$benutzer = "hans-peter";
$passwort = "DieS?ms22";
$dbname = "gfn_fahrradvermietung";

// Verbindung herstellen
$verbindung = new mysqli($server, $benutzer, $passwort, $dbname);
?>
