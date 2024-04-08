<?php

require_once __DIR__ . '/Category.php';

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
     * @param  Category $_category
     * @return void
     */
    function __construct($_name, $_price, Category $_category){
        
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;

    }
    
    /**
     * setImage
     *
     * @param  string $image
     */
    public function setImage($_image){

        $this->image = $_image;

    }

}