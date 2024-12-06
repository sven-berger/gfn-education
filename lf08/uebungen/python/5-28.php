<?php include("includes/header.php"); ?>

SELECT hersteller.herstellername AS hersteller, COUNT(*) AS anzahl FROM hersteller JOIN modelle ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller ORDER BY anzahl DESC LIMIT 1;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT hersteller.herstellername AS hersteller, COUNT(*) AS anzahl FROM hersteller JOIN modelle ON modelle.herstellernr = hersteller.herstellernr GROUP BY hersteller ORDER BY anzahl DESC LIMIT 1;";
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
                <td><?php echo $inhalt['hersteller']; ?></td>
                <td><?php echo $inhalt['anzahl']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>