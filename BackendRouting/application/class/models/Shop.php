<?php

namespace App\Model;

#header('Content-Type: application/json; charset=utf-8');
use App\Database\DatabaseHandler;

class Shop extends DatabaseHandler
{
    protected $pdo;
    /**
     * @var mixed|string Current Page
     */
    public $page;
    /**
     * @var float|int Start from flag to indicate the first product of the current page
     */
    public $start_from;
    /**
     * @var mixed|null Sort by Most viewed, Name Asc, Name Desc
     */
    public $sort_by;
    /**
     * @var string Sort By Flag ->  Name ASC/DESC
     */
    public $type_sort;
    public $num_per_page;

    private $ingredients_types = array(
        "Energy kj","Energy kcal","Fat",
        "Saturated fat","Carbohydrates","Sugar","Fiber","Proteins",
        "Salt","Sodium","Energy","Vitamin-C","Vitamin-B6",
        "Vitamin-B12","Potassium","Calcium","Coffeine","Taurine"
    );

    public function __construct(array $params = []) {
        $this->pdo = $this->getConn();

        $this->page = $params[0]; // page value
        $this->sort_by = $params[1]; // sort by condition

        if(strcmp($this->sort_by,"name_asc") == 0){
            $this->type_sort = "ASC";
        } else {
            if($this->sort_by != null)
                $this->type_sort = "DESC";
        }

        $this->num_per_page = 24;
        $this->start_from = ($this->page - 1) * 24;
    }

    /**
     * @return string[]
     */
    public function getIngredientsTypes(): array
    {
        return $this->ingredients_types;
    }
}