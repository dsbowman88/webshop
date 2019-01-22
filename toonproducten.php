<?php
use Webshop\ProductData;
use Webshop\OrderData;
use Webshop\Data;
?>

<html>
    <form class="form-group" action="" method="post">
        <input style="width:80%;" class="" type="text" name="naamfilter">
        <button style="float:right;" class="btn btn-success" type="submit">Filter</button>
    </form>
    <HR>
</html>

<?php

$naamfilter = $_POST['naamfilter'];

$pd = new ProductData();
$products = $pd->getAllProducts();
$fproducts = $pd->filterProducts($naamfilter);


foreach ($fproducts as $product){
    echo "<LI>" . $product['naam'] . " kost " . $product['prijs'] 
        . " <a href=\"dbproductverwijderen.php?productid=" . $product['id'] . "\"><button style='float:right' class=\"btn btn-sm btn-danger\" >Verwijder Product</button></a>" 
        . " <a href=\"productwijzigen.php?productid="    . $product['id'] . "\"><button style='float:right' class=\"btn btn-sm btn-primary\" >Wijzig Product</button></a>" 
        . " <a href=\"productkopen.php?productid="    . $product['id'] . "\"><button style='float:right' class=\"btn btn-sm btn-success\" >Koop Product</button></a>" . "</LI><HR>";
}
    