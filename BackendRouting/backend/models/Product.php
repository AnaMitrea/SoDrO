<?php

namespace model;

use Handlers\DatabaseHandler;

class Product extends DatabaseHandler
{
    private $pdo;
    private $row;
    private $prod_id = '';
    private $ingredients_types = array(
        "Energy kj","Energy kcal","Fat",
        "Saturated fat","Carbohydrates","Sugar","Fiber","Proteins",
        "Salt","Sodium","Energy","Vitamin-C","Vitamin-B6",
        "Vitamin-B12","Potassium","Calcium","Coffeine","Taurine");

    /**
     * constructor that uses database handler
     */
    public function __construct($prod_id) {
        $this->pdo = $this->getConn();
        $this->prod_id = $prod_id;
        $this->row = $this->getProduct($prod_id);
    }

    /**
     * @param $prod_id
     * @return mixed
     */
    public function getProduct($prod_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products where code='$this->prod_id'", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * @return mixed
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @return string[]
     */
    public function getIngredientsTypes(): array
    {
        return $this->ingredients_types;
    }

}