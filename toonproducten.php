<html>
    <form class="form-group" action="" method="post">
        <input class="form-control" type="text" name="naamfilter">
        <button class="btn-success" type="submit">Filter</button>
    </form>
    <HR>
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
        . " <a href=\"dbproductverwijderen.php?productid=" . $row['id'] . "\"><button style='float:right' class=\"btn btn-danger\" >Verwijder Product</button></a>" 
        . " <a href=\"productwijzigen.php?productid="    . $row['id'] . "\"><button style='float:right' class=\"btn btn-primary\" >Wijzig Product</button></a>" 
        . " <a href=\"productkopen.php?productid="    . $row['id'] . "\"><button style='float:right' class=\"btn btn-success\" >Koop Product</button></a>" . "</LI><HR>";
    }

$conn = NULL;