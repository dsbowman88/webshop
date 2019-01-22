<?php


// Start PDO Connection
try {$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Assign form input to vars
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO producten (naam, prijs) 
VALUES (:fnaam, :fprijs)");

// bind param
$stmt->bindParam(':fnaam', $productnaam);
$stmt->bindParam(':fprijs', $productprijs);

// Execute SQL statement
    $stmt->execute();
} catch (PDOException $e) {
    die($e->getMessage());
}

$conn = NULL;
header("Location: index.php");