<?php
include_once "CarInterface.php";
include_once "ChoiseColor.php";
include_once "ChoiceBodyType.php";
include_once "ChoiceUnick.php";

class Lada implements CarInterface
{
    use ChoiseColor,ChoiceBodyType,ChoiceUnick;

    public function bodyType(string $type): ?string
    {
        return printf(ChoiceBodyType::choicesBodyType($type, self::BODYTYPEARR));
    }

    public function color(string $color): ?string
    {
        return printf(ChoiseColor::choicesColor($color, self::COLORARR));
    }

    public function price(string $priceChoice): ?string
    {
        $priceCar = [200000, 300000, 500000];
        return printf(ChoiceUnick::choicesUnick($priceChoice, $priceCar));
    }

}


