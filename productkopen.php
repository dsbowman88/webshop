<?php

// Assign form input to vars
$productid = $_GET['productid'];
$besteller = 'floris@codegorilla.nl';
$tebetalen = 0.00;


$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", 'root', 'toortoor');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $conn->prepare("SELECT * FROM producten WHERE id = :fproductid");
$statement->execute([
 'fproductid' => $productid
 ]);
 
while ($row = $statement->fetch()) {
    $tebetalen = $row['prijs'];
}	
$conn = NULL;

// Start PDO Connection
try {$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO bestellingen (email, productid, tebetalen) 
VALUES (:femail, :fproductid, :ftebetalen)");

// bind param
$stmt->bindParam(':femail', $besteller);
$stmt->bindParam(':fproductid', $productid);
$stmt->bindParam(':ftebetalen', $tebetalen);

// Execute SQL statement
    $stmt->execute();
} catch (PDOException $e) {
    die($e->getMessage());
}

$conn = NULL;
header("Location: index.php");