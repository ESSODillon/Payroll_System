<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: secretary.class.php
 * Description:
*/

class Secretary extends Employee{
    //private attributes for secretary
    private $wage;
    private $hours;
    //constructor
    public function __construct($person, $emp_id, $year_of_service, $wage, $hours)
    {
        parent::__construct($person, $emp_id, $year_of_service);
        $this->wage = $wage;
        $this->hours = $hours;
    }
    //public get methods

    public function getWage(){
        return $this->wage;
    }

    public function getHours(){
        return $this->hours;
    }

    //class method for calculating payment amount
    public function getPaymentAmount()
    {
        //if hours is over 40, secretary receives 150% for all hours worked in excess to 40
        if ($this->hours > 40) {
            return ($this->wage * $this->hours) + (($this->wage * $this->hours)* .150);
        } else {
            return $this->wage * $this->hours;
        }
    }

    public function toString()
    {
        parent::toString();
        echo "<h3>Wage: $" . $this->getWage() . "</h3>";
        echo "<h3>Hours: " . $this->getHours() . "</h3>";
        echo "<h3>Earning: $" . $this->getPaymentAmount() . "</h3>";
    }
}