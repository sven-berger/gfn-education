<?php include("includes/header.php"); ?>

SELECT modelle.bezeichnung, hersteller.herstellernr, hersteller.herstellername, tagesmietpreis FROM hersteller JOIN modelle WHERE herstellername LIKE 'Scott' AND tagesmietpreis > '12';

<?php include("includes/middle.php");?>

<?php
$sql = "SELECT modelle.bezeichnung, hersteller.herstellernr, hersteller.herstellername, tagesmietpreis FROM hersteller JOIN modelle WHERE herstellername LIKE 'Scott' AND tagesmietpreis > '12';";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Bezeichnung</th>
            <th>Herstellernummer</th>
            <th>Herstellername</th>
            <th>Tagesmietpreis</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['herstellernr']; ?></td>
                <td><?php echo $inhalt['herstellername']; ?></td>
                <td><?php echo $inhalt['tagesmietpreis'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php");