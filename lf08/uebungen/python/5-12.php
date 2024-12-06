<?php include("includes/header.php"); ?>

SELECT * FROM fahrraeder WHERE anschaffungswert > 500 AND anschaffungswert < 800;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT * FROM fahrraeder WHERE anschaffungswert > 500 AND anschaffungswert < 800;";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Anschaffungswert zwischen 500€ und 800€</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['anschaffungswert']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>