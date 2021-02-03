<?php


class PlushToys extends BaseItem
{
    public $stuffing;

    public function __construct(string $title,string $brand,string $color,float $price,string $stuffing)
    {
        parent::__construct($title, $brand, $color, $price);
        $this->stuffing = $stuffing;
    }

    function getItem(){
        echo $this->title . " цвет: " . $this->color  . " стоит: " . $this->price .
            " изготовитель: " . $this->brandItem . " наполнитель: ". $this->stuffing;

    }

    function getDocSF(){
        echo $this->title . " " . $this->brandItem . " " .
            $this->stuffing . " " . $this->color  . " цена: " . $this->price ;
    }


}
