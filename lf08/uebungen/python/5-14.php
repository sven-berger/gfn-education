<?php include("includes/header.php"); ?>

SELECT fahrraeder.fahrradnr, fahrraeder.anschaffungswert, fahrradarten.bezeichnung FROM fahrraeder JOIN fahrradarten ON fahrraeder.modellnr = fahrradarten.artnr ORDER BY fahrraeder.fahrradnr ASC;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT fahrraeder.fahrradnr, fahrraeder.anschaffungswert, fahrradarten.bezeichnung FROM fahrraeder JOIN fahrradarten ON fahrraeder.modellnr = fahrradarten.artnr ORDER BY fahrraeder.fahrradnr ASC;";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Anschaffungswert</th>
            <th>Bezeichnung</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['anschaffungswert'] . "€"; ?></td>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>