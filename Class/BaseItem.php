<?php


class BaseItem
{
    public $title;
    public $brandItem;
    public $color;
    public $price;

    function __construct($title,$brand,$color,$price) {
    $this->title = $title;
    $this->brandItem = $brand;
    $this->color = $color;
    $this->price = $price;
    }

    function getItem(){
        return $this->title  . "цвет: " . $this->color  . "стоит: " .
            $this->price . "изготовитель: " . $this->brandItem;

    }

    function getDocSF(){
        return $this->title  . " " . $this->brandItem . " " .
            $this->color  . "цена: " . $this->price ;
    }

    function getBrandAndLabel(){
        echo  $this->brandItem . " " . $this->title;

    }

}


