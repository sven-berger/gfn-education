<?php include("includes/header.php"); ?>

<pre><code class="language-python">
    
eingabe =  int(input("Wie alt bist du? "))
if eingabe > 18:
    print(f"Du kommst hier rein!")
elif eingabe == 18:
    print(f"Du kommst hier rein und bekommst ein Geschenk!")
else:
    print(f"Du kommst hier nicht rein!")

</code></pre>

<?php include("includes/footer.php"); ?>