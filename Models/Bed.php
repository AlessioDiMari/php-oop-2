<?php

require_once __DIR__ . '/Product.php';

class Bed extends Product{

    public $type = 'Cuccia';
    public $material;
    public $size;
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  Category $_category
     * @param  string $_size
     * @param  string $_material
     */
    function __construct($_name, $_price, Category $_category, $_size, $_material,) {
        
        parent::__construct($_name, $_price, $_category);

        $this->size = $_size;
        $this->material = $_material;

    }

}