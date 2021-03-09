<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: person.class.php
 * Description: 
*/

class Person
{
    private $first_name;
    private $last_name;
    private $gender;
    private $SSN;

    public function __construct($first_name, $last_name, $gender, $SSN)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->SSN = $SSN;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getSSN()
    {
        return $this->SSN;
    }

    public function toString()
    {
        // What do I do here??
    }
}
