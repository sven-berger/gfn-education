<?php include("includes/header.php"); ?>

<?php echo htmlspecialchars('<?php
$eingabe = 56431;
while ($eingabe !== 3545245) {
    if ($eingabe === 3545245) {
        echo "<p>Herzlichen Glückwunsch, du hast gewonnen!</p>";
        break;
    } else {
        echo "<p>Leider nichts gewonnen, versuche es erneut.</p>";
        break;
    }
}
?>'); ?>

<?php include("includes/middle.php"); ?>

Leider nichts gewonnen, du hast gewonnen!

<?php include("includes/footer.php"); ?>