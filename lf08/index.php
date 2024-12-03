<?php include("includes/header.php"); ?>

SELECT * FROM fahrraeder WHERE anschaffungswert > 600;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT * FROM fahrraeder WHERE anschaffungswert > 600;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Anschaffungswert</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['anschaffungswert']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>