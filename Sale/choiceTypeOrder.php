<?php


trait choiceTypeOrder
{
    static public function choicesTypeOrder($choice, $arr):?string
    {
        return $arr[$choice] ?? $arr[2];
    }
}