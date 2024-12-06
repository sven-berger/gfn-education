<?php include("includes/header.php"); ?>

SELECT bezeichnung, herstellernr, herstellername FROM hersteller JOIN fahrradarten WHERE herstellername LIKE 'Cube';

<?php include("includes/middle.php");?>

<?php
$sql = "SELECT bezeichnung, herstellernr, herstellername FROM hersteller JOIN fahrradarten WHERE herstellername LIKE 'Cube';";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Bezeichnung</th>
            <th>Herstellernummer</th>
            <th>Herstellername</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['herstellernr']; ?></td>
                <td><?php echo $inhalt['herstellername']; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php");