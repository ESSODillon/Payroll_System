<?php
/*
 * Author: Dillon Polley
 * Date: 3/13/21
 * Name: invoice.class.php
 * Description: 
*/

// Class for creating invoices that implements from the Payable interface
class Invoice implements Payable
{

    // Private data members and static data member for counting invoices created, starts out at 0
    private $part_name;
    private $price;
    private $quantity;
    private static $invoice_count = 0;

    // Constructor for creating a new Invoice
    public function __construct($part_name, $price, $quantity)
    {
        $this->part_name = $part_name;
        $this->price = $price;
        $this->quantity = $quantity;

        // Adds 1 to the static member invoice count every time this constructor is called
        self::$invoice_count++;
    }

    // Getter for the part name data member
    public function getPartName()
    {
        return $this->part_name;
    }

    // Getter for the price data member
    public function getPrice()
    {
        return $this->price;
    }

    // Getter for the quantity data member
    public function getQuantity()
    {
        return $this->quantity;
    }

    // Method for calculating the payment amount for the Invoice
    public function getPaymentAmount()
    {
        // Calculate the payment through the quantity & price data members
        $payment = $this->price * $this->quantity;
        return $payment;
    }

    // Static function for the invoice count
    public static function getInvoiceCount()
    {
        return self::$invoice_count;
    }

    // Turns all the information into a string for us to print
    public function toString()
    {
        echo "<h3>Invoice</h3>";
        echo "<strong>Part Name</strong>: ", $this->getPartName();
        echo "<br><strong>Price</strong>: $", $this->getPrice();
        echo "<br><strong>Quantity</strong>: ", $this->getQuantity();
        printf("<br><strong>Payment</strong>: $%.2f", $this->getPaymentAmount());
    }
}
