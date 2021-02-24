<?php
include_once "ChoiceOrder.php";

trait ChoiceOrders
{
    static public function choicesOrder($choice, $arr):?OrderProcessorInterface
    {
        return $arr[$choice] ?? $arr[0];
    }
}