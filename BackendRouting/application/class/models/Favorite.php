<?php

namespace App\Model;

use App\Database\DatabaseHandler;

class Favorite extends DatabaseHandler
{
    private $pdo;
    /**
     * constructor that uses database handler
     */
    public function __construct() {
        $this->pdo = $this->getConn();
    }

    /**
     * @return false|string
     */
    public function getProductForCategory($code)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products where code like '$code'", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $info = array();
        $info[] = $rows;
        return json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }

    public function getListOfFavorites(){
        $category = "car";
        $stmt2 = $this->pdo->prepare("SELECT * FROM products where categories_tags like '%$category%' limit 5", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt2->execute();
        $rows = $stmt2->fetchAll();
        $info = array();
        $info[] = $rows;
        return json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }
}