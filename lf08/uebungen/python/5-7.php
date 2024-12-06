<?php include("includes/header.php"); ?>

SELECT MAX(anschaffungswert) AS 'Maximaler Anschaffungswert' FROM fahrraeder;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT MAX(anschaffungswert) AS 'max_anschaffungswert' FROM fahrraeder;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Maximaler Anschaffungswert</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['max_anschaffungswert'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>