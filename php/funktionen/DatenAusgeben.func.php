<?php 
function daten_ausgeben($daten) {
    // Direkter Zugriff auf die Formulardaten aus $daten
    $vorname = htmlspecialchars($daten['vorname']);
    $nachname = htmlspecialchars($daten['nachname']);
    $alter = htmlspecialchars($daten['alter']);

    // Tabellen-Ausgabe
    echo "<table>";
    echo "<tr><th>Vorname</th><th>Nachname</th><th>Alter</th></tr>";
    echo "<tr>";
    echo "<td>$vorname</td>";
    echo "<td>$nachname</td>";
    echo "<td>$alter</td>";
    echo "</tr>";
    echo "</table>";
}
?>