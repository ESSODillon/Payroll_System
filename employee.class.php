<?php
/*
 * Author: Dillon Polley
 * Date: 3/13/21
 * Name: employee.class.php
 * Description: Abstract base class that creates Employees. Implements the Payable interface.
*/
abstract class Employee implements Payable
{
    // Private data members, and static data member to keep track of how many employees have been made.
    private $person;
    private $emp_id;
    private $year_of_service;
    private static $emp_count = 0;

    // Constructor for the Employee class, also uses composition to create a Person object, adds 1 every time the constructor is called to the static method 
    public function __construct($first_name, $last_name, $gender, $SSN, $emp_id, $year_of_service)
    {
        $this->person = new Person($first_name, $last_name, $gender, $SSN);
        $this->emp_id = $emp_id;
        $this->year_of_service = $year_of_service;

        // Adds 1 to employee count
        self::$emp_count++;
    }

    // Getter for the person data member
    public function getPerson()
    {
        return $this->person;
    }

    // Getter for the employee id data member
    public function getEmpId()
    {
        return $this->emp_id;
    }

    // Getter for the years of service data member
    public function getYearOfService()
    {
        return $this->year_of_service;
    }

    // Getter for the static data member
    public static function getEmpCount()
    {
        return self::$emp_count;
    }

    // Turns all the information above into strings, and can be called later as this is an abstract parent class
    public function toString()
    {
        echo $this->getPerson()->toString();
        echo "<br><strong>Employee ID</strong>: ", $this->getEmpId();
        echo "<br><strong>Years of Service</strong>: ", $this->getYearOfService();
    }
}
