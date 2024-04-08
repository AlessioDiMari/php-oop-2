<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Traits/GetMaterial.php';
require_once __DIR__ . '/Traits/GetSize.php';

class Bed extends Product{

    use GetMaterial;
    use GetSize;
    public $type = 'Cuccia';
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  Category $_category
     */
    function __construct($_name, $_price, Category $_category) {
        
        parent::__construct($_name, $_price, $_category);


    }

}