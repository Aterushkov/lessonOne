<?php


Interface ChoiceOrder
{
    public function getOrder($choice): ?OrderProcessorInterface;
}
