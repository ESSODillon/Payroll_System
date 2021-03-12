<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: sales_person.class.php
 * Description:
*/

class SalesPerson extends Employee{
//private attributes of sales person
    private $sales;
    private $commission_rate;
//constructor
    public function __construct($person, $emp_id, $year_of_service, $sales, $commission_rate)
    {
        parent::__construct($person, $emp_id, $year_of_service);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
    }
//public get methods
    public function getSales(){
        return $this->sales;
    }

    public function getCommissionRate(){
        return $this->commission_rate;
    }
//calculate payment amount
    public function getPaymentAmount()
    {
        //multiply sales and commission rate to get payment amount
        return $this->sales * $this->commission_rate;
    }

    public function toString()
    {
        parent::toString();
        echo "<h3>Sales: $" . $this->getSales(). "</h3>";
        echo "<h3>Commission Rate: " . $this->getCommissionRate() . "</h3>";
        echo "<h3>Earning: $" . $this->getPaymentAmount() . "</h3>";
    }
}