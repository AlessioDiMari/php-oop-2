<?php

trait GetSize{

    protected $size;
    
    /**
     * setSize
     *
     * @param  string $size
     */
    public function setSize($size){

        $this->size = $size;
        
    }

    public function getSize(){

        return $this->size;
    }

}