<?php include("includes/header.php"); ?>

SELECT hersteller.herstellernr, hersteller.herstellername, fahrradarten.bezeichnung FROM hersteller JOIN fahrradarten ORDER BY `hersteller`.`herstellernr` ASC;

<?php include("includes/middle.php");?>

<?php
$sql = "SELECT hersteller.herstellernr, hersteller.herstellername, fahrradarten.bezeichnung FROM hersteller JOIN fahrradarten ORDER BY `hersteller`.`herstellernr` ASC;";
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
                <td><?php echo $inhalt['herstellernr']; ?></td>
                <td><?php echo $inhalt['herstellername']; ?></td>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php");