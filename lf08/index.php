<?php include("includes/header.php"); ?>

import random

zufallszahl = random.randint(1, 100)
eingabe = int(input("Bitte gib eine Zahl zwischen 1 - 100 ein: "))

while eingabe != zufallszahl:
    if eingabe < zufallszahl:
        print("Höher!")
    elif eingabe > zufallszahl:
        print("Niedriger!")
    eingabe = int(input("Bitte gib eine neue Zahl ein: "))
print("Glückwunsch, du hast die richtige Zahl geraten!")

<?php include("includes/middle.php"); ?>

<?php if (!isset($_POST['zahl'])): ?>
    <form action="" method="POST">
        <label for="zahl">Bitte gib eine Zahl zwischen 1 - 100 ein:</label>
        <input type="number" id="zahl" name="zahl" min="1" max="100" required>   
    <button type="submit">Eingabe abschicken</button>
    </form>
<?php endif; ?>

<?php
    session_start();
    if (!isset($_SESSION['zufallszahl'])) {
        $_SESSION['zufallszahl'] = rand(0, 101);
    } 
?>

<?php if (isset($_POST['zahl'])): ?>
    <?php 
        $zahl = (int)$_POST['zahl'];
        $zufallszahl = $_SESSION['zufallszahl'];
    ?>
    <?php if ($zahl < $zufallszahl): ?>
        <div class="sectionHeader fail">Höher!</div>
        <form action="" method="POST">
            <label for="zahl">Bitte gib eine Zahl zwischen 1 - 100 ein:</label>
            <input type="number" id="zahl" name="zahl" min="1" max="100" required>   
        <button type="submit">Eingabe abschicken</button>
        </form>
    <?php elseif ($zahl > $zufallszahl): ?>
        <div class="sectionHeader fail">Niedriger!</div>
        <form action="" method="POST">
            <label for="zahl">Bitte gib eine Zahl zwischen 1 - 100 ein:</label>
            <input type="number" id="zahl" name="zahl" min="1" max="100" required>   
        <button type="submit">Eingabe abschicken</button>
    <?php else: ?>
        <div class="sectionHeader success">Glückwunsch, du hast die richtige Zahl geraten!</div><br>
        <?php unset($_SESSION['zufallszahl']); ?>
        <a href="">Neues Spiel starten</a>
    <?php endif; ?>
<?php endif; ?>

<?php include("includes/footer.php"); ?>