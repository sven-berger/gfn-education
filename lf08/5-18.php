<?php include("includes/header.php"); ?>

SELECT MAX(modelle.tagesmietpreis) AS max_tagesmietpreis FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';

<?php include("includes/middle.php");?>

<?php
$sql = "SELECT MAX(modelle.tagesmietpreis) AS max_tagesmietpreis FROM modelle JOIN hersteller ON hersteller.herstellernr = modelle.herstellernr WHERE hersteller.herstellername = 'Scott';";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Höchster Tagesmietpreis</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['max_tagesmietpreis'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php");