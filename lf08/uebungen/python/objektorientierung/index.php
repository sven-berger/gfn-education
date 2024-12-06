<?php include("includes/header.php"); ?>

eingabe =  int(input("Wie alt bist du? "))

if eingabe > 18:
    print(f"Du kommst hier rein!")
elif eingabe == 18:
    print(f"Du kommst hier rein und bekommst ein Geschenk!")
else:
    print(f"Du kommst hier nicht rein!")

<?php include("includes/middle.php"); ?>

<form method="POST" action="">
<label for="age">Wie alt bist du?</label>
<input type="number" name="age" id="age" required>
<button type="submit">Überprüfen</button>
</form>


<?php include("includes/footer.php"); ?>