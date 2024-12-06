<?php include("includes/header.php"); ?>

SELECT SUM(anschaffungswert) AS 'Gesamtwert:' FROM fahrraeder;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT SUM(anschaffungswert) AS 'gesamtwert' FROM fahrraeder;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Gesamtwert</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['gesamtwert'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>