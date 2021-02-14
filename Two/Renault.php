<?php
include_once  "CarInterface.php";

class Renault implements CarInterface
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

    public function transmission($transmissionChoice): ?string
    {
        $transmission = ['automatic', 'mechanical', 'CVT'];
        $transmissionRes = self::switchCase($transmissionChoice, $transmission);
        return printf($transmissionRes);
    }
}

