<?php include("includes/header.php"); ?>

SELECT MAX(anschaffungswert) AS 'Kleinster Anschaffungswert' FROM fahrraeder;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT MIN(anschaffungswert) AS 'min_anschaffungswert' FROM fahrraeder;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Kleinster Anschaffungswert</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['min_anschaffungswert'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>