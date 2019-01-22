<?php
use Webshop\ProductData;
use Webshop\OrderData;
use Webshop\Data;

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$productnaam = $_POST['productnaam'];
$productprijs = $_POST['productprijs'];
$data = ["naam" => $productnaam,"prijs" => $productprijs];
$pd = new ProductData;
$productadd = $pd->addProduct($data);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Toevoegen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <form action="producttoevoegen.php" method="post" class="form-group">
            Productnaam: <input type="text" class="form-control" name="productnaam" placeholder="productnaam"><BR>
            Productprijs: <input type="text" class="form-control" name="productprijs" placeholder="productprijs"><BR>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>