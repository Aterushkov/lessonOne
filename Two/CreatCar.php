<?php
include "FabricCar.php";
include "Lada.php";
include "Nissan.php";
include "Renault.php";

class CreatCar implements FabricCar
{
    private function switchCase($choice, $arr):?object
    {
        $res = '';
        switch ($choice) {
            case 0:
                $res = $arr[0];
                break;
            case 1:
                $res = $arr[1];
                break;
            case 2:
                $res = $arr[2];
                break;
        }
        return $res;
    }
    public function getCar($car): ?object
    {
        $carType = [
            new Lada(),
            new Nissan(),
            new Renault()
        ];
        $carRes = self::switchCase($car, $carType);
        return $carRes;
    }
}

$fabricOne = new CreatCar();
$carOne = $fabricOne->getCar(0);
$carOne-> bodyType(2);
$carOne-> color(2);
$carOne-> price(2);

$fabricTwo = new CreatCar();
$carTwo = $fabricOne->getCar(1);
$carTwo-> bodyType(2);
$carTwo-> color(2);
$carTwo-> clearance(2);

$fabricThree = new CreatCar();
$carThree = $fabricOne->getCar(2);
$carThree-> bodyType(2);
$carThree-> color(2);
$carThree-> transmission(2);
