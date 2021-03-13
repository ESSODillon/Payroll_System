<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: employee.class.php
 * Description: 
*/
abstract class Employee implements Payable
{
    private $person;
    private $emp_id;
    private $year_of_service;
    private static $emp_count = 0;

    public function __construct($person, $emp_id, $year_of_service)
    {
        $this->person = $person;
        $this->emp_id = $emp_id;
        $this->year_of_service = $year_of_service;

        self::$emp_count++;
    }

    // Call on this method in test_payable.php to turn the person object into a String. 
    public function getPerson($first_name, $last_name, $gender, $SSN)
    {
        $this->person = new Person();

        $this->person->toString();

        return $this->person;
    }

    public function getEmpId()
    {
        return $this->emp_id;
    }

    public function getYearOfService()
    {
        return $this->year_of_service;
    }

    public static function getEmpCount()
    {
        return self::$emp_count;
    }

    public function toString()
    {
        echo $this->getPerson()->toString();
        echo "<br><strong>Employee ID</strong>: ", $this->getEmpId();
        echo "<br><strong>Years of Service</strong>: ", $this->getYearOfService();
    }
}
