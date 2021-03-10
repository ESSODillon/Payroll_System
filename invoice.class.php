<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: invoice.class.php
 * Description: 
*/

class Invoice implements Payable
{

    private $part_name;
    private $price;
    private $quantity;
    private static $invoice_count = 0;

    public function __construct($part_name, $price, $quantity)
    {
        $this->part_name = $part_name;
        $this->price = $price;
        $this->quantity = $quantity;

        self::$invoice_count++;
    }

    public function getPartName()
    {
        return $this->part_name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }


    public function getPaymentAmount()
    {
        // What needs added here??
    }

    public static function getInvoiceCount()
    {
        return self::$invoice_count;
    }

    public function toString()
    {
        echo "<br><strong>Part Name</strong>: ", $this->getPartName();
        echo "<br><strong>Price</strong>: ", $this->getPrice();
        echo "<br><strong>Quantity</strong>: ", $this->getQuantity();
        echo "<br><strong>Payment</strong>: ", $this->getPaymentAmount();
    }
}
