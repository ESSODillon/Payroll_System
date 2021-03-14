<?php
/*
 * Author: Dillon Polley
 * Date: 3/13/21
 * Name: executive_manager.class.php
 * Description: 
*/

// Executive Manager that extends the Manager which is also an Employee and a Person
class ExecutiveManager extends Manager
{
    // Private data members
    private $bonus;

    // Constructor to create a new Executive Manager
    public function __construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service, $department, $salary, $bonus)
    {
        parent::__construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service, $department, $salary);

        $this->bonus = $bonus;
    }

    // Getter for the bonus private data member
    public function getBonus()
    {
        return $this->bonus;
    }

    // Public method to calculate the payment amount, which is the bonus plus the salary
    public function getPaymentAmount()
    {
        return $this->bonus + parent::getSalary();
    }

    // Turns all the above information into a string
    public function toString()
    {
        echo "<h3>Executive Manager</h3>";
        parent::toString();
        echo "<br><strong>Bonus</strong>: $", number_format($this->getBonus(), 2);
    }
}
