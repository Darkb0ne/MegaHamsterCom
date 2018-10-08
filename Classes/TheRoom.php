<?php

class TheRoom extends Areas{

    public $length;
    public $width;
    public $height;
    public $price;
    public $description;
    public $specialEquipment = [""];

    public function __construct(){
        $this->length = 80;
        $this->width = 50;
        $this->height = 50;
        $this->price = 49;
        $this->description = "Our Domain ‘The Room’ is the basic choice of real estate for a
                        hamster owner. It features a length of 80 cm, a width of 50 cm and aheight of 50 cm.
                        It is available for the low price of EUR 49,-";
        $this->specialEquipment = [""];
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
