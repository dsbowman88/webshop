<?php


// make connection middels PDO

$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");

// Stuur SQL QUERY naar DBserver   // SELECT * FROM deelnemers

    $stmt = $conn->query("SELECT * FROM producten");

// Antwoord van DBserver opvragen
    // een voor een $row opvragen met fetch
    while ($row = $stmt->fetch()) {

        // Output genereren
        echo "<LI>" . $row['naam'] . " " . $row['prijs'] . " heeft id: " . $row['id'] 
        . " <a href=\"dbproductverwijderen.php?productid=" . $row['id'] . "\">Verwijder Product</a>" . "</LI>";
    }

$conn = NULL;