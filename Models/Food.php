<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{

    public $type = 'Cibo';
    public $ingredient;
    public $weight;
    public $minAge;
    public $expiration;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  Category $_category
     * @param  float $_weight
     * @param  string $_ingredient
     * @param  int $_minAge
     */
    function __construct($_name, $_price, Category $_category, $_weight, $_ingredient, $_minAge) {
        
        parent::__construct($_name, $_price, $_category);

        $this->weight = $_weight;
        $this->ingredient = $_ingredient;
        $this->minAge = $_minAge;

    }

}