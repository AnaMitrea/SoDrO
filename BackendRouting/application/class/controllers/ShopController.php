<?php

namespace App\Controller;

use App\Model\Shop;
use PDO;

class ShopController extends Shop
{
    public function __construct(array $params = []) {
        parent::__construct($params);
        $this->getProduct();
    }

    /**
     * @return void
     */
    private function getProduct()
    {
        if ($this->sort_by == null) {
            $stmt = $this->pdo->prepare("SELECT * FROM products limit $this->num_per_page offset $this->start_from", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        } else {
            $stmt = $this->pdo->prepare("SELECT * FROM products order by 4 $this->type_sort limit $this->num_per_page offset $this->start_from", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        }
        $stmt->execute();
        $rows = $stmt->fetchAll();
        $info = array();
        $info[] = $rows;
        $json_data = json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );

        // Gets Number of Pages
        $stmt_count = $this->pdo->prepare("SELECT count(1) FROM products", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $stmt_count->execute();
        $entire_row = $stmt_count->fetch();
        $number_of_pages = $entire_row[0];
        $number_of_pages = ceil($number_of_pages / 24);
        $json_config = json_encode(['page' => $this->page, 'sort_by' => $this->sort_by, 'number_of_pages' => $number_of_pages], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        require 'frontend/pages/shop-page.php';
    }
}