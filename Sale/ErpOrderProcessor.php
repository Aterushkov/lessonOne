<?php
include_once "OrderProcessorInterface.php";

class ErpOrderProcessor implements OrderProcessorInterface
{

    static public function process(Order $order): ?string
    {
        $result = $order->number;
        try {
            if (sizeof($order->orderItems) <= 0) {
                throw new Exception("Массив пуст");
            }
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        return  print_r($result);

    }

    static public function statusOrder($status): ?string
    {
        return ChoiceStatusOrder::choicesStatusOrder($status, Order::STATUSARR);
    }

    static public function typeOrder($type): ?string
    {
        return choiceTypeOrder::choicesTypeOrder($type, Order::TYPEORDERARR);
    }
}