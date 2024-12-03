<!DOCTYPE html>  
<html lang="de">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>LF08 v2</title>  
    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<?php
// Datenbank-Zugangsdaten
$server = "localhost";
$benutzer = "sven";
$passwort = "diesims2";
$dbname = "fahrradvermietung_2013";

// Verbindung herstellen
$verbindung = new mysqli($server, $benutzer, $passwort, $dbname);
?>

<body>  


<div class="container">
<header class="navbar">
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#services">Dienstleistungen</a></li>
            <li><a href="#about">Über uns</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
    </nav>
</header>
<aside class="sidebar">  
    <h2>Aufgabe 5</h2>  
    <ul>  
        <li><a href="5-1.php">Aufgabe 5.1</a></li>
        <li><a href="5-2.php">Aufgabe 5.2</a></li>
        <li><a href="5-3.php">Aufgabe 5.3</a></li>
        <li><a href="5-4.php">Aufgabe 5.4</a></li>
        <li><a href="5-5.php">Aufgabe 5.5</a></li>
        <li><a href="5-6.php">Aufgabe 5.6</a></li>
        <li><a href="5-7.php">Aufgabe 5.7</a></li>
        <li><a href="5-8.php">Aufgabe 5.8</a></li>
        <li><a href="5-9.php">Aufgabe 5.9</a></li>
        <li><a href="5-10.php">Aufgabe 5.10</a></li>
        <li><a href="5-11.php">Aufgabe 5.11</a></li>
        <li><a href="5-12.php">Aufgabe 5.12</a></li>
        <li><a href="5-13.php">Aufgabe 5.13</a></li>
        <li><a href="5-14.php">Aufgabe 5.14</a></li>
    </ul>  
</aside>

<main class="content">
<h2>SQL-Befehl</h2>
<pre><code class="language-sql">

SELECT * FROM fahrraeder WHERE anschaffungswert > 500 AND anschaffungswert < 800;

</code></pre>

<h2>Ausgabe</h2>
<div class="ausgabe">
<?php
$sql = "SELECT * FROM fahrraeder WHERE anschaffungswert > 500 AND anschaffungswert < 800;";
$ausgabe = $verbindung->query($sql);
?>
<table>
    <thead>
        <tr>
            <th>Fahrradnummer</th>
            <th>Anschaffungswert</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($inhalt = $ausgabe->fetch_assoc()): ?>
            <tr>
                <td><?php echo $inhalt['fahrradnr']; ?></td>
                <td><?php echo $inhalt['anschaffungswert'] . "€"; ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</div>

</div>

</main>
</div>  

</body>  
</html>