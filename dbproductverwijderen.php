<?php


// Start PDO Connection
try {$conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Assign form input to vars
$productid = $_GET['productid'];

// Prepare SQL statement
$stmt = $conn->prepare("DELETE FROM producten WHERE id = :fid");

// bind param
$stmt->bindParam(':fid', $productid);

// Execute SQL statement
    $stmt->execute();
} catch (PDOException $e) {
    die($e->getMessage());
}
$conn = NULL;
header("Location: index.php");