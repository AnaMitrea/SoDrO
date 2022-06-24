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

    public function getListOfFavorites(){
        $stmt = $this->pdo->prepare("SELECT * FROM products order by random() limit 5", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $info = array();
        $info[] = $rows;
        return json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }

    /**
     * @return false|string
     */
    public function getProductForCategory($category)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products where categories_tags like '%$category%' order by random() limit 5", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $info = array();
        $info[] = $rows;
        return json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }
}