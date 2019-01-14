<html>
    <form action="" method="post">
        <input type="text" name="naamfilter">
        <button type="submit">Submit</button>
    </form>
</html>

<?php

$naamfilter = $_POST['naamfilter'];

// make connection middels PDO

$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");

// Stuur SQL QUERY naar DBserver   // SELECT * FROM deelnemers

    $stmt = $conn->query("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%'");

// Antwoord van DBserver opvragen
    // een voor een $row opvragen met fetch
    while ($row = $stmt->fetch()) {

        // Output genereren
        echo "<LI>" . $row['naam'] . " kost " . $row['prijs'] 
        . " <a href=\"dbproductverwijderen.php?productid=" . $row['id'] . "\"><button class=\"btn-danger\" >Verwijder Product</button></a>" 
        . " <a href=\"productwijzigen.php?productid="    . $row['id'] . "\"><button class=\"btn-primary\" >Wijzig Product</button></a>" . "</LI>";
    }

$conn = NULL;