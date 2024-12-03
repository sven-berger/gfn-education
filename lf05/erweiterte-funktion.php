<?php include("includes/header.php"); ?>

start = int(input("Gib den Startwert ein: "))
ende = int(input("Gib den Endwert ein: "))
schrittweite = int(input("Gib die Schrittweite ein: "))

def zahlen_ausgeben(start, ende, schrittweise):
    for zahl in range(start, ende, schrittweise):
        print(zahl)

zahlen_ausgeben(start, ende, schrittweite)

<?php include("includes/footer.php"); ?>