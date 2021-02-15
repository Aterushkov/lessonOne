<?php


trait ChoiceBodyType
{
    static public function choicesBodyType($choice, $arr):?string
    {
        return $arr[$choice] ?? $arr[0];
    }
}
