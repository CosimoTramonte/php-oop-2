<?php

require_once __DIR__ . "/Product.php";

class Toy extends Product{
    private $material;
    private $color;

    //set
    public function setMaterial($_material){
        $this->material = $_material;
    }
    public function setColor($_color){
        $this->color = $_color;
    }
    
    //get
    public function getMaterial(){
        return $this->material;
    }
    public function getColor(){
        return $this->color;
    }
}


?>