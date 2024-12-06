<?php include("includes/header.php"); ?>

SELECT fahrraeder.fahrradnr, modelle.bezeichnung AS modell_bezeichnung, fahrradarten.bezeichnung AS fahrradart_bezeichnung FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung NOT IN ('Kinderrad', 'Jugendrad');

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT fahrraeder.fahrradnr, modelle.bezeichnung AS modell_bezeichnung, fahrradarten.bezeichnung AS fahrradart_bezeichnung FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung NOT IN ('Kinderrad', 'Jugendrad') ORDER BY fahrraeder.fahrradnr ASC;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Modellbezeichnung</th>
            <th>Fahrradbezeichnung</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['modell_bezeichnung']; ?></td>
                <td><?php echo $inhalt['fahrradart_bezeichnung']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>