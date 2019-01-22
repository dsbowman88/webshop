<?php

namespace Webshop;

class ProductData extends Data {
    public function getAllProducts()
    {
        $query = $this->connection->prepare("SELECT * FROM producten");
        $query->execute();
        return $query;
    }
    public function getPrice($data)
    {
        $query = $this->connection->prepare("SELECT * FROM producten WHERE id = :fid");
        $fdata = ['fid' => $data['id']];
        $query->execute($fdata);
        return $query;
    }
    public function filterProducts($naamfilter)
    {
        $query = $this->connection->prepare("SELECT * FROM producten WHERE naam LIKE '%$naamfilter%'");
        $query->execute();
        return $query;
    }
    public function addProduct($data)
    {
        $query = $this->connection->prepare("INSERT INTO producten (naam, prijs) 
        VALUES (:fnaam, :fprijs)");
        $data = [
            ':fnaam' => $data['naam'],
            ':fprijs' => $data['prijs']
        ];
        $query->execute($data);
    }
    public function delProduct($data)
    {
        $query = $this->connection->prepare("DELETE FROM producten WHERE id = :fid");
        $data = [':fid' => $data];
        $query->execute($data);
    }
    public function editProduct($data)
    {
        $query = $this->connection->prepare("UPDATE producten SET naam=:fnaam, prijs=:fprijs WHERE id=:fid");
        $fdata = [
            ':fid' => $data['id'],
            ':fnaam' => $data['naam'],
            ':fprijs' => $data['prijs']
        ];
        $query->execute($fdata);
    }
}