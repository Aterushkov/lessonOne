<?php
include_once  "CarInterface.php";

class Nissan implements CarInterface
{

    private function switchCase($choice, $arr): ?string
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

    public function clearance($clearanceChoice): ?string
    {
        $clearanceCar = [15, 18, 20];
        $clearanceRes = self::switchCase($clearanceChoice, $clearanceCar);
        return printf($clearanceRes);
    }
}

