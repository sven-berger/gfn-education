<?php include("includes/header.php"); ?>

SELECT * FROM fahrraeder WHERE anschaffungswert < 400 AND kaufdatum < '2008-01-01';

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT * FROM fahrraeder WHERE anschaffungswert < 400 AND kaufdatum < '2008-01-01' ORDER BY `fahrraeder`.`kaufdatum` ASC";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Kaufdatum (Sortiert)</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['kaufdatum']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>