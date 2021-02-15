<?php
include "FactoryCar.php";
include "Lada.php";
include "Nissan.php";
include "Renault.php";
include "ChoiceCar.php";

class CreatCar implements FactoryCar
{
    use ChoiceCar;

    public function getCar($car): ?CarInterface
    {
        $carType = [
            new Lada(),
            new Nissan(),
            new Renault()
        ];
        return ChoiceCar::choicesCar($car, $carType);
    }
}

$fabricOne = new CreatCar();
$carOne = $fabricOne->getCar(0);
$carOne-> bodyType(4);
$carOne-> color(4);
$carOne-> price(4);

//$fabricTwo = new CreatCar();
//$carTwo = $fabricTwo->getCar(1);
//$carTwo-> bodyType(2);
//$carTwo-> color(2);
//$carTwo-> clearance(2);

//$fabricThree = new CreatCar();
//$carThree = $fabricOne->getCar(2);
//$carThree-> bodyType(2);
//$carThree-> color(2);
//$carThree-> transmission(2);
