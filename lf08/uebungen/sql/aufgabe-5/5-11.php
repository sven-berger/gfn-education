<?php include("includes/header.php"); ?>

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) < 2007 OR YEAR(kaufdatum) > 2007;

SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) <> 2007;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT * FROM fahrraeder WHERE YEAR(kaufdatum) < 2007 OR YEAR(kaufdatum) > 2007 ORDER BY `fahrraeder`.`kaufdatum` ASC;";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Kaufdatum</th>
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