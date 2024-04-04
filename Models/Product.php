<?php

class Product{

    public $name;
    public $price;
    public $image;
    public $category;
    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  float $_price
     * @param  string $_category
     * @return void
     */
    function __construct($_name, $_price, $_category){
        
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;

    }

}