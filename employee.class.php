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

    public function getPerson()
    {

        // The attribute of this class is an object of Person. Idk how to do this???
        $this->person = new Person();

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
    }
}
