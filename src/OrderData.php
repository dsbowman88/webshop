<?php

namespace Webshop;

class OrderData extends Data{
    public function getAllOrders()
    {
        $query = $this->connection->prepare("SELECT * FROM bestellingen");
        $query->execute();
        return $query;
    }
    public function addNewOrder()
    {
        $query = $this->connection->prepare("INSERT INTO bestellingen (email, productid, tebetalen) 
        VALUES (:femail, :fproductid, :ftebetalen)");
        $query->execute([
            ':fid' => $data['productid'],
            ':femail' => $data['email'],
            ':ftebetalen' => $data['tebetalen']
        ]);
    }
}

?>