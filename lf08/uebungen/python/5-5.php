<?php include("includes/header.php"); ?>

SELECT fahrradnr, anschaffungswert, anschaffungswert * 1.19 AS brutto_anschaftswert FROM fahrraeder WHERE fahrradnr = 6;

<?php include("includes/middle.php"); ?>

<?php
$sql = "SELECT fahrradnr, anschaffungswert, anschaffungswert * 1.19 AS brutto_anschaftswert FROM fahrraeder WHERE fahrradnr = 6";
$ausgabe = $verbindung->query($sql);
?>

<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Anschaffungswert (Brutto)</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['brutto_anschaftswert'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include("includes/footer.php"); ?>