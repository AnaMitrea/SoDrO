<?php

namespace model;

use Handlers\DatabaseHandler;
#header('Content-Type: application/json; charset=utf-8');
class Shop extends DatabaseHandler
{
    private $pdo;

    private $ingredients_types = array(
        "Energy kj","Energy kcal","Fat",
        "Saturated fat","Carbohydrates","Sugar","Fiber","Proteins",
        "Salt","Sodium","Energy","Vitamin-C","Vitamin-B6",
        "Vitamin-B12","Potassium","Calcium","Coffeine","Taurine");

    /**
     * constructor that uses database handler
     */
    public function __construct() {
        $this->pdo = $this->getConn();
    }

    /**
     * @return false|string
     */
    public function getProduct()
    {
        #$stmt = $this->pdo->prepare("SELECT * FROM products where code='$this->code'", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt = $this->pdo->prepare("SELECT * FROM products limit 24 offset 1", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt->execute();
        $rows = $stmt->fetchAll();

        $info = array();
        $info[] = $rows;

        return json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }

}