<?php
/*
 * Author: Kameron Someson
 * Date: 3/13/21
 * Name: secretary.class.php
 * Description:
*/

class Secretary extends Employee
{
    //private attributes for secretary
    private $wage;
    private $hours;

    // constructor that creates a new secretary, and a new employee, and a new person, all in one
    public function __construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service, $wage, $hours)
    {
        parent::__construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service);
        $this->wage = $wage;
        $this->hours = $hours;
    }

    // Getter for the wage data member
    public function getWage()
    {
        return $this->wage;
    }

    // Getter for the hours data member
    public function getHours()
    {
        return $this->hours;
    }

    //class method for calculating payment amount
    public function getPaymentAmount()
    {
        //if hours is over 40, secretary receives 150% for all hours worked in excess to 40
        if ($this->hours > 40) {
            // Variable for the hours worked over 40
            $excess_hours = $this->hours - 40;
            // Variable for the over time wage
            $over_time = $this->wage * 1.5;
            // Variable that returns the regular 40 hours
            $regular_hours = $this->hours - $excess_hours;
            // Returns regular wage, on top of the over time madee
            return ($this->wage * $regular_hours) + (($excess_hours * $over_time));
        } else {
            // If the employee didn't work over 40 hours, they just get normal weekly pay
            return $this->wage * $this->hours;
        }
    }

    // Turns all the above information into a string
    public function toString()
    {
        echo "<h3>Secretary</h3>";
        parent::toString();
        echo "<br><strong>Wage per hour</strong>: $", number_format($this->getWage(), 2);
        echo "<br><strong>Hours</strong>: ", $this->getHours();
        echo "<br><strong>Earning</strong>: $", number_format($this->getPaymentAmount(), 2);
    }
}
