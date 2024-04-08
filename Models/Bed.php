<?php

require_once __DIR__ . '/Product.php';

class Bed extends Product{

    public $type = 'Cuccia';
    public $size;
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  Category $_category
     * @param  string $_size
     */
    function __construct($_name, $_price, Category $_category, $_size) {
        
        parent::__construct($_name, $_price, $_category);

        $this->size = $_size;

    }

}