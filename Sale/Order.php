<?php
include_once "OrderInterface.php";

class Order implements OrderInterface
{
    protected int $id;
    public string $number;
    public string $createdBy;
    public array $orderItems;
    public CONST STATUSARR = ['Draft', 'Held', 'Rejected', 'Deleted'];
    public CONST TYPEORDERARR = ['Fast', 'Juristic', 'Normal'];
    public string $status;
    public string $typeOrder;

    function __construct($id, $number, $createdBy, $orderItems, $status, $typeOrder)
    {
        $this->id = $id;
        $this->number = $number;
        $this->createdBy = $createdBy;
        $this->orderItems = $orderItems;
        $this->status = $status;
        $this->typeOrder = $typeOrder;
    }

    static public function getNumber(): ?string
    {
        return $res = date("Ymd")."-".date("His")."-".rand(1, 100);
    }
}