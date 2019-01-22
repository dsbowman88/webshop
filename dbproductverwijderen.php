<?php
require 'class.php';
$data = $_GET['productid'];

$pd = new ProductData();
$delpd = $pd->delProduct($data);

header("Location: index.php");