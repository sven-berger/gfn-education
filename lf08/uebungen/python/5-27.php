<?php include("includes/header.php"); ?>

SELECT hersteller.herstellername, COUNT(hersteller.herstellername) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller.herstellername;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT hersteller.herstellername, COUNT(hersteller.herstellername) AS anzahl FROM fahrraeder JOIN modelle ON modelle.modellnr = fahrraeder.modellnr JOIN hersteller ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller.herstellername;";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Herstellername</th>
            <th>Anzahl</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['herstellername']; ?></td>
                <td><?php echo $inhalt['anzahl']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>