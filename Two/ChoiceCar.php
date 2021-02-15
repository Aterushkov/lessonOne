<?php


class ChoiceCar
{
    static public function choicesCar($choice, $arr):?CarInterface
    {
        return $arr[$choice] ?? $arr[0];
    }
}
