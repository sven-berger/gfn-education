<?php include("includes/header.php"); ?>

SELECT COUNT(*) AS anzahl_fahrraeder FROM modelle JOIN fahrradarten ON fahrradarten.artnr = modelle.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT COUNT(*) AS anzahl_fahrraeder FROM modelle JOIN fahrradarten ON fahrradarten.artnr = modelle.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Anzahl der Kinderräder</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['anzahl_fahrraeder']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>