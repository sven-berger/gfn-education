<?php include("includes/header.php"); ?>

SELECT fahrradarten.bezeichnung, COUNT(*) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr GROUP BY fahrradarten.bezeichnung;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT fahrradarten.bezeichnung, COUNT(*) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr GROUP BY fahrradarten.bezeichnung;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Modellname</th>
            <th>Anzahl</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['anzahl'] . " Fahräder"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>
