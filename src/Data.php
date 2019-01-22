<?php

namespace Webshop;

class Data {
    protected $connection;

    function __construct()
    {
        $this->connection = new PDO("mysql:host=127.0.0.1;dbname=webshop", "root", "toortoor");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function __destruct()
    {
        $this->connection = null;
    }
}