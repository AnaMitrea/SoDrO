<?php

namespace App\Controller;

use App\Model\Shop;

class ShopController extends Shop
{
    public function __construct(array $params = []) {
        parent::__construct($params);
        $this->getProduct();
    }

    /**
     * @return void
     */
    public function getProduct()
    {
        if ($this->sort_by == null) {
            $stmt = $this->pdo->prepare("SELECT * FROM products limit $this->num_per_page offset $this->start_from", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        } else {
            $stmt = $this->pdo->prepare("SELECT * FROM products order by 4 $this->type_sort limit $this->num_per_page offset $this->start_from", array(\PDO::ATTR_CURSOR => \PDO::CURSOR_FWDONLY));
        }
        $stmt->execute();
        $rows = $stmt->fetchAll();

        $info = array();
        $info[] = $rows;

        $json = json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
        require 'frontend/pages/shop-page.php';
    }
}