<?php
// make connection middels PDO
$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");
// Stuur SQL QUERY naar DBserver   // SELECT * FROM deelnemers

    $stmt = $conn->query("SELECT * FROM bestellingen");

// Antwoord van DBserver opvragen
    // een voor een $row opvragen met fetch
    while ($row = $stmt->fetch()) {

        // Output genereren
        echo "<LI>" . $row['id'] . " " . $row['email'] . " " . $row['productid'] . " " . $row['tebetalen'] . "</LI><HR>";
    }

$conn = NULL;