<?php
// Assign form input to vars
$productid = $_POST['productid'];
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];

// Start PDO Connection
try {$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Prepare SQL statement
$stmt = $conn->prepare("UPDATE producten SET naam=:fnaam, prijs=:fprijs WHERE id=:fproductid");

// bind param
$stmt->bindParam(':fproductid', $productid);
$stmt->bindParam(':fnaam', $productnaam);
$stmt->bindParam(':fprijs', $productprijs);

// Execute SQL statement
    $stmt->execute();
} catch (PDOException $e) {
    die($e->getMessage());
}
$conn = NULL;
header("Location: index.php");