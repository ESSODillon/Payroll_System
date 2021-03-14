<?php
/*
 * Author: Dillon Polley
 * Date: 3/13/21
 * Name: manager.class.php
 * Description: 
*/

// Class for creating a Manager from the Employee abstract class
class Manager extends Employee
{
    // Private data members
    private $department;
    private $salary;

    // Constructor to create a new Person, Employee, and Manager, all in one called Manager
    public function __construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service, $department, $salary)
    {
        parent::__construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service);
        $this->department = $department;
        $this->salary = $salary;
    }

    // Getter for the department data member
    public function getDepartment()
    {
        return $this->department;
    }

    // Getter for the salary data member
    public function getSalary()
    {
        return $this->salary;
    }

    // Function for the payment amount
    public function getPaymentAmount()
    {
        return $this->salary;
    }

    // Turns all the above and parent into a string
    public function toString()
    {
        parent::toString();
        echo "<br><strong>Department</strong>: ", $this->getDepartment();
        echo "<br><strong>Salary</strong>: ", number_format($this->getSalary(), 2);
        echo "<br><strong>Earning</strong>: $", number_format($this->getPaymentAmount(), 2);
    }
}
