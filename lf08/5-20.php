<?php include("includes/header.php"); ?>

SELECT COUNT(*) FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';

<?php include("includes/middle.php");?>

<?php
$sql = "SELECT COUNT(*) AS anzahl_fahrraeder FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Anzahl der Fahrräder der Firma Scott</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['anzahl_fahrraeder']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php");