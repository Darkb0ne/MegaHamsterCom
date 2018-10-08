<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 01.10.2018
 * Time: 12:24
 */

abstract class Areas
{
    public $length;
    public $width;
    public $height;
    public $price;
    public $description;
    public $specialEquipment = [""];

    abstract public function __construct();

    abstract public function outputProductInfo();
    abstract public function getSpecialEquipment();
    abstract public function calculateArea();
}