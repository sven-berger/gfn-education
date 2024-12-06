<?php include("includes/header.php"); ?>

SELECT fahrraeder.fahrradnr, fahrradarten.bezeichnung, hersteller.herstellername FROM fahrraeder JOIN modelle ON fahrraeder.modellnr = modelle.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr WHERE fahrradarten.bezeichnung = 'Kinderrad';

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT fahrraeder.fahrradnr, fahrradarten.bezeichnung, hersteller.herstellername FROM fahrraeder JOIN modelle ON fahrraeder.modellnr = modelle.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr WHERE fahrradarten.bezeichnung = 'Kinderrad';";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Bezeichnung</th>
            <th>Herstellername</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['herstellername']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>