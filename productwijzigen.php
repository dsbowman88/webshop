<?php
$productid = $_GET['productid'];

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=webshop", 'root', 'toortoor');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // let op: dit nog herschrijven als prepared statement
    $statement = $conn->prepare("SELECT * FROM producten WHERE id = :fproductid");
    $statement->execute([
     'fproductid' => $productid
     ]);
     
    while ($row = $statement->fetch()) {
        $productnaam = $row['naam'];
        $productprijs = $row['prijs'];
    }	
        
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;	

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
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
        <form action="dbproductwijzigen.php" method="post" class="form-group">
            <input type="text" class="form-control" name="productid" value = "<?= $productid ?>" hidden><BR>
            Productnaam: <input type="text" class="form-control" name="productnaam" value = "<?= $productnaam ?>"><BR>
            Productprijs: <input type="text" class="form-control" name="productprijs" value = "<?= $productprijs ?>"><BR>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>