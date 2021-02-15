<?php


trait ChoiceUnick
{
    static public function choicesUnick($choice, $arr):?string
    {
        return $arr[$choice] ?? $arr[0];
    }
}
