<?php


interface OrderProcessorInterface
{
    static public function process(Order $order):?string;
    static public function statusOrder($status):?string;
    static public function typeOrder($type):?string;
}