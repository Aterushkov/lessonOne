<?php
include_once "CarInterface.php";

class Lada implements CarInterface
{

    private function switchCase($choice, $arr):?string
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

    public function bodyType($type): ?string
    {
        $bodyType = self::bodyTypeArr;
        $typeRes = self::switchCase($type, $bodyType);
        return printf($typeRes);

    }

    public function color($color): ?string
    {
        $colorType = self::colorArr;
        $colorRes = self::switchCase($color, $colorType);
        return printf($colorRes);
    }

    public function price($priceChoice): ?string
    {
        $priceCar = [200000, 300000, 500000];
        $priceRes = self::switchCase($priceChoice, $priceCar);
        return printf($priceRes);
    }

}


