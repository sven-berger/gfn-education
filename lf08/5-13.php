<?php include("includes/header.php"); ?>

SELECT * FROM hersteller WHERE herstellername LIKE 'C%';

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT * FROM hersteller WHERE herstellername LIKE 'C%';";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Herstellernummer</th>
            <th>Herstellername</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['herstellernr']; ?></td>
                <td><?php echo $inhalt['herstellername']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>


<?php include("includes/footer.php"); ?>