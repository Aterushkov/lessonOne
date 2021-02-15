<?php


class ChoiseColor
{
    static public function choicesColor($choice, $arr):?string
    {
        return $arr[$choice] ?? $arr[0];
    }
}
