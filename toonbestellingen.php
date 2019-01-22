<?php
use Webshop\ProductData;
use Webshop\OrderData;
use Webshop\Data;
?>

<?php
$od = new OrderData;
$orders = $od->getAllOrders();

foreach ($orders as $order){
    echo "<LI>" . $order['id'] . " : " . $order['email'] . " | " . $order['productid'] . " | " . $order['tebetalen'] . "</LI>";
}
?>