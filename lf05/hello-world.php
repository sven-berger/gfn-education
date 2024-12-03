<?php include("includes/header.php"); ?>

vorname = input("Wie ist dein Vorname? ")
zweitname = input("Wie ist dein zweiter Name? ")
nachname = input("Wie ist dein Nachname? ")

age = int(input("Wie alt bist du? "))

zufaellige_zahl = int(input("Gib bitte eine zufällige Zahl ein: "))
zahlen_vergleich = int(input("Gib bitte eine Zahl ein, mit der du deine Zahl vergleichen möchtest: "))

if zweitname.strip():
    gesamter_name = vorname + " " + zweitname + " " + nachname
else:
    gesamter_name = vorname + " " + nachname
print("Hallo " + gesamter_name + "!")

if age < 30:
    print("Du bist jünger als 30 Jahre alt.")
else:
    print("Du bist 30 Jahre oder älter.")

if zufaellige_zahl == zahlen_vergleich:
    print("Deine zufällige Zahl ist genau 100!")
elif zufaellige_zahl < zahlen_vergleich:
    print("Deine zufällige Zahl ist kleiner als 100!")
else:
    print("Deine zufällige Zahl ist größer als 100!")

<?php include("includes/footer.php"); ?>