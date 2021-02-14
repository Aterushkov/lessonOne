<?php


abstract class BaseItem
{
    protected $title;
    protected $brandItem;
    protected $color;
    protected $price;

    function __construct($title, $brand, $color, $price)
    {
        $this->title = $title;
        $this->brandItem = $brand;
        $this->color = $color;
        $this->price = $price;
    }

    abstract public function getItem(): ?string;

    abstract function getDocSF(): ?string;


    function getBrandAndLabel()
    {
        echo $this->brandItem . " " . $this->title;

    }

}


