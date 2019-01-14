<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Webshop Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <ul>
            <li><a class="navbar-brand" href="producttoevoegen.html">Product Toevoegen</a></li>
            <li><a class="nav-link" href="producttoevoegen.html">Toon Bestellingen</a></li>
            <li>Menu item</li>
        </ul>
    </nav>
    <div class="container">
    <h1>Welkom in de webshop</h1>
    
    <h2>Producten Lijst</h2>
        <?php include 'toonproducten.php' ?>
        <h2>Alle bestellingen</h2><HR>
        <?php include 'toonbestellingen.php' ?>
    </div>
</body>
</html>
