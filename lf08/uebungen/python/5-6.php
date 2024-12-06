<?php include("includes/header.php"); ?>

SELECT AVG(anschaffungswert) AS 'Durchschnittswert' FROM fahrraeder;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT AVG(anschaffungswert) AS 'durchschnittswert' FROM fahrraeder;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Durchschnittswert</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['durchschnittswert'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>