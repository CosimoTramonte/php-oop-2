<?php

class Product{
    private $image;
    private $name;
    private $brand;
    private $price;

    function __construct($_image, $_name, $_brand, $_price){
        $this->setImage($_image);
        $this->setName($_name);
        $this->setBrand($_brand);
        $this->setPrice($_price);
    }

    public function setImage($_image){
        $this->image = $_image;
    }
    public function setName($_name){
        $this->name = $_name;
    }
    public function setBrand($_brand){
        $this->brand = $_brand;
    }
    public function setPrice($_price){
        $this->price = $_price;
    }

    public function getImage(){
        return $this->image;
    }
    public function getName(){
        return $this->name;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getPrice(){
        return $this->price;
    }
}



?>