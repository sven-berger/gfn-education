<?php include("includes/header.php"); ?>

SELECT AVG(modelle.tagesmietpreis) AS durchschnitt_tagesmietpreis FROM modelle JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT AVG(modelle.tagesmietpreis) AS durchschnitt_tagesmietpreis FROM modelle JOIN fahrradarten ON modelle.artnr = fahrradarten.artnr WHERE fahrradarten.bezeichnung = 'Kinderrad';";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Durchschnitt (Tagesmietpreis) der Kinderräder</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['durchschnitt_tagesmietpreis'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>