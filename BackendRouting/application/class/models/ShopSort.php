<?php

namespace App\Model;

use App\Database\DatabaseHandler;

class ShopSort extends DatabaseHandler
{
    protected $pdo;
    public $formFlag; // "submit-from-left" or "submit-from-search-bar"
    public $command_for_categories;
    public $command_for_values;
    public $search_words;

    public function __construct(array $params = [])
    {
        $this->pdo = $this->getConn();


        if(!empty($params[0])) {
            if($params[0] == "submit-from-left" || $params[0] == "submit-from-search-bar") {
                $this->formFlag = $params[0];
            } else {
                $this->formFlag = null;
            }
        } else {
            $this->formFlag = null;
        }
        if(!empty($params[1])) {
            $this->command_for_categories = $params[1][0] ?? null;
            $this->command_for_values = $params[1][1] ?? null;
        } else {
            $this->command_for_categories = null;
            $this->command_for_values = null;
        }
        if(!empty($params[2])) {
            $this->search_words = $params[2];
        } else {
            $this->search_words = null;
        }
    }
}