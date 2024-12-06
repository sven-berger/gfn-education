<?php include("includes/header.php"); ?>

SELECT MAX(modelle.tagesmietpreis) AS hoechster_tagesmietpreis, modelle.bezeichnung FROM modelle JOIN fahrradarten WHERE fahrradarten.bezeichnung = 'Kinderrad';

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT MAX(modelle.tagesmietpreis) AS hoechster_tagesmietpreis, modelle.bezeichnung FROM modelle JOIN fahrradarten WHERE fahrradarten.bezeichnung = 'Kinderrad';";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Modellname</th>
            <th>Höchster Tagesmietpreis (Kinderrad)</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['bezeichnung']; ?></td>
                <td><?php echo $inhalt['hoechster_tagesmietpreis'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>
