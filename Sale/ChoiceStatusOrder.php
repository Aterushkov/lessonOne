<?php


trait ChoiceStatusOrder
{
    static public function choicesStatusOrder($choice, $arr):?string
    {
        return $arr[$choice] ?? $arr[0];
    }
}