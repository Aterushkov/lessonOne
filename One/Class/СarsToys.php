<?php


class СarsToys extends BaseItem
{
    protected $material;

    public function __construct(string $title, string $brand, string $color, float $price, string $material)
    {
        parent::__construct($title, $brand, $color, $price);
        $this->material = $material;
    }

    public function getItem(): ?string
    {
        return $this->title . "цвет: " . $this->color . "стоит: " . $this->price .
            "изготовитель: " . $this->brandItem . "материал: " . $this->material;

    }

    public function getDocSF(): ?string
    {
        return $this->title . " " . $this->brandItem . " " .
            $this->material . " " . $this->color . "цена: " . $this->price;
    }
}

