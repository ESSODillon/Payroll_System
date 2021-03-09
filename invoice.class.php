<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: invoice.class.php
 * Description: 
*/

class Invoice implements Payable
{

    private $part_time;
    private $price;
    private $quantity;
    private static $invoice_count = 0;

    public function __construct($part_time, $price, $quantity)
    {
        $this->part_time = $part_time;
        $this->price = $price;
        $this->quantity = $quantity;

        self::$invoice_count++;
    }

    public function getPartTime()
    {
        return $this->part_time;
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
        // What needs added here???
    }
}
