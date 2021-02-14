<?php


class PlushToys extends BaseItem
{
    protected $stuffing;

    public function __construct(string $title, string $brand, string $color, float $price, string $stuffing)
    {
        parent::__construct($title, $brand, $color, $price);
        $this->stuffing = $stuffing;
    }

    public function getItem(): ?string
    {
        return $this->title . " цвет: " . $this->color . " стоит: " . $this->price .
            " изготовитель: " . $this->brandItem . " наполнитель: " . $this->stuffing;

    }

    public function getDocSF(): ?string
    {
        return $this->title . " " . $this->brandItem . " " .
            $this->stuffing . " " . $this->color . " цена: " . $this->price;
    }


}
