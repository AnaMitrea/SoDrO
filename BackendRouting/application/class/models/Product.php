<?php

namespace App\Model;

use App\Database\DatabaseHandler;

#header('Content-Type: application/json; charset=utf-8');

class Product extends DatabaseHandler
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
    public function getProduct($code)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products where code like '$code'", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt->execute();
        $rows = $stmt->fetch();
        return json_encode($rows, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }

    public function getSimilarProducts(){
        $category = "beverage";

        $stmt2 = $this->pdo->prepare("SELECT * FROM products where categories_tags like '%$category%' order by random() limit 5 ", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt2->execute();
        $rows = $stmt2->fetchAll();
        $info = array();
        $info[] = $rows;
        return json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }


    /**
     * @return string
     */
    public function getIngredientsTypes(): string
    {
        return json_encode($this->ingredients_types);
    }

}