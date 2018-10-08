<?php

class ThePit extends Areas{
    public $length;
    public $width;
    public $height;
    public $price;
    public $description;
    public $specialEquipment = [""];

    public function __construct(){
        $this->length = 20;
        $this->width = 80;
        $this->height = 80;
        $this->price = 69;
        $this->description = "Seitenlänge 20, ab 69€, hat Hamster training gloves, Hamster punching sack";
        $this->specialEquipment = ["Hamster Training gloves", "hamster punching sack"];
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
        echo round((2* ($this->length)*($this->length)*(1+sqrt(2)))) . " square cm";
    }

}