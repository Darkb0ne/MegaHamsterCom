<?php

class TheFlat extends Areas{
    public $length;
    public $width;
    public $height;
    public $price;
    public $description;
    public $specialEquipment = [""];

    public function __construct(){
        $this->length = 120;
        $this->width = 80;
        $this->height = 80;
        $this->price = 149;
        $this->description = "120x80x80, ab 149€, hat Food Jars";
        $this->specialEquipment = ["Food Jars"];
    }

    public function outputProductInfo(){
        echo $this->description;
    }

    public function getSpecialEquipment(){
        foreach($this->specialEquipment as $value){
            echo $value;
        }

    }

    public function calculateArea(){
        echo ($this->length * $this->width / 10) . " square cm";
    }

}