<?php
/*
 * Author: Kameron Someson
 * Date: 3/13/21
 * Name: sales_person.class.php
 * Description:
*/

// Sales Person class that extends the abstract Employee class
class SalesPerson extends Employee
{
    //private attributes of sales person
    private $sales;
    private $commission_rate;
    //constructor that creates a new Employee
    public function __construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service, $sales, $commission_rate)
    {
        parent::__construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
    }
    //public get method for the sales data member
    public function getSales()
    {
        return $this->sales;
    }
    // Getter for the commission rate data member
    public function getCommissionRate()
    {
        return $this->commission_rate;
    }
    //calculate payment amount method
    public function getPaymentAmount()
    {
        //multiply sales and commission rate to get payment amount
        $payment = $this->sales * ($this->commission_rate / 100);

        return $payment;
    }

    // Turns all the above into a string for us to print, and print the parent string
    public function toString()
    {
        echo "<h3>Sales Person</h3>";
        parent::toString();
        echo "<br><strong>Gross Sale</strong>: $", number_format($this->getSales(), 2);
        echo "<br><strong>Commission Rate</strong>: ", $this->getCommissionRate(), "%";
        echo "<br><strong>Earning</strong>: $", number_format($this->getPaymentAmount(), 2);
    }
}
