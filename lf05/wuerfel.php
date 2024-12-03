<?php include("includes/header.php"); ?>

import random

def wuerfel_statistik(wuerfe):
    ergebnisse = {i: 0 for i in range(2, 13)}

    for i in range(wuerfe):
        wuerfel1 = random.randint(1, 6)
        wuerfel2 = random.randint(1, 6)
        summe = wuerfel1 + wuerfel2
        ergebnisse[summe] += 1
    return ergebnisse

wuerfe = int(input("Wie oft soll gewürfelt werden? "))
statistik = wuerfel_statistik(wuerfe)

for ergebnis, haeufigkeit in statistik.items():
    print(f"Summe {ergebnis}: {haeufigkeit} mal")

<?php include("includes/footer.php"); ?>