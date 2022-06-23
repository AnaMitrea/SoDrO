<?php

namespace App\Controller;

use App\Model\ShopSort;
use PDO;

class ShopSortController extends ShopSort
{
    public $json_data;

    public function __construct(array $params = []) {
        parent::__construct($params);
        $this->getSortedProducts();
    }

    /**
     * @return void
     */
    private function getSortedProducts() : void
    {
        if ($this->formFlag == "submit-from-left") {
            if ($this->command_for_categories == null && $this->command_for_values == null) {
                $stmt = $this->pdo->prepare("SELECT * FROM products where categories_tags like concat ('%','beverages','%') limit 24", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            } else if ($this->command_for_categories != null && $this->command_for_values == null) {
                $stmt = $this->pdo->prepare("SELECT * FROM products where $this->command_for_categories limit 24", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            } else if ($this->command_for_categories == null && $this->command_for_values != null) {
                $stmt = $this->pdo->prepare("SELECT * FROM products where $this->command_for_values limit 24", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            } else {
                $stmt = $this->pdo->prepare("SELECT * FROM products where $this->command_for_values and $this->command_for_categories limit 24", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            }
        } else {
            if ($this->search_words != null) {
                $stmt = $this->pdo->prepare("SELECT * FROM products where UPPER(product_name) like UPPER(concat('%','$this->search_words','%')) limit 24", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            } else {
                $stmt = $this->pdo->prepare("SELECT * FROM products where UPPER(categories_tags) like UPPER(concat ('%','beverages','%')) limit 24", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            }
        }

        $stmt->execute();
        $rows = $stmt->fetchAll();
        if(empty($rows)) {
            $rows = "null";
        }

        $info = array();
        $info[] = $rows;
        $this->json_data = json_encode($info, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    }
}