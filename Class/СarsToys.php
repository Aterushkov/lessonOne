<?php


class СarsToys extends BaseItem
{
    public $material;

    public function __construct(string $title,string $brand,string $color,float $price,string $material)
        {
            parent::__construct($title, $brand, $color, $price);
            $this->material = $material;
        }

    function getItem(){
        return $this->title . "цвет: " . $this->color  . "стоит: " . $this->price .
            "изготовитель: " . $this->brandItem . "материал: ". $this->material;

    }

    function getDocSF(){
        return $this->title . " " . $this->brandItem . " " .
            $this->material . " " . $this->color  . "цена: " . $this->price ;
    }
}

