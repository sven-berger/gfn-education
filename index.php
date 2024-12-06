<?php
include("includes/header.php");
include("funktionen/DatenAusgeben.func.php");
?>

<?php if (empty ($_SERVER['REQUEST_METHOD'] === 'POST')): ?>
<h2>Einfache Funktion zum Ausgeben der Daten</h2>
<form method="post" action="">
    <label for="vorname">Vorname:</label>
        <input type="text" id="vorname" name="vorname" required>
    <label for="nachname">Nachname:</label>
        <input type="text" id="nachname" name="nachname" required>
    <label for="alter">Alter:</label>
        <input type="number" id="alter" name="alter" required>
    <button type="submit">Absenden</button>
</form>
<?php endif; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    daten_ausgeben($_POST);
}
?>

<?php include("includes/footer.php"); ?>