<?php
include_once "CarInterface.php";
include_once "ChoiseColor.php";
include_once "ChoiceBodyType.php";
include_once "ChoiceUnick.php";

class Nissan implements CarInterface
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

    public function clearance(string $clearanceChoice): ?string
    {
        $clearanceCar = [15, 18, 20];
        return printf(ChoiceUnick::choicesUnick($clearanceChoice, $clearanceCar));
    }
}

