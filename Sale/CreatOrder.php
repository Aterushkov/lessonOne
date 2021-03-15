<?php
include_once "Order.php";
include_once "ChoiceOrder.php";
include_once "ChoiceOrders.php";
include_once "ErpOrderProcessor.php";
include_once "CrmOrderProcessor.php";
include_once "OrderProcessorInterface.php";
include_once "OrderInterface.php";

class CreatOrder implements ChoiceOrder
{
    use ChoiceOrders;

    public function getOrder($choice): ?OrderProcessorInterface
    {
        $orderType = [
            new ErpOrderProcessor(),
            new CrmOrderProcessor(),
        ];
        return ChoiceOrders::choicesOrder($choice, $orderType);
    }
}


$fabricOne = new CreatOrder();
$order = new Order(1,Order::getNumber(),2,[33,33],0,0);
$carOne = $fabricOne->getOrder(0);
$carOne->process($order);
