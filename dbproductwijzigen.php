<?php
require 'class.php';
// Assign form input to vars
$productid = $_POST['productid'];
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];
// input to array for injection
$data = ["id" => $productid, "naam" => $productnaam, "prijs" => $productprijs];


// Open connection to DB for ProductData manipulation
$pd = new ProductData;
// Define which method to use and which parameters to supply
$editproduct = $pd->editProduct($data);

header("Location: index.php");