<?php
/*
 * Author: Dillon Polley
 * Date: 3/13/21
 * Name: person.class.php
 * Description: 
*/

// Class for a Person object
class Person
{
    // Private data members
    private $first_name;
    private $last_name;
    private $gender;
    private $SSN;

    // Constructor to create a new Person
    public function __construct($first_name, $last_name, $gender, $SSN)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->SSN = $SSN;
    }

    // Getter for the first name data member
    public function getFirstName()
    {
        return $this->first_name;
    }

    // Getter for the last name data member
    public function getLastName()
    {
        return $this->last_name;
    }

    // Getter for the gender data member
    public function getGender()
    {
        return $this->gender;
    }

    // Getter for the social security number data member
    public function getSSN()
    {
        return $this->SSN;
    }

    // Turns all the above into a string
    public function toString()
    {
        echo "<strong>Name</strong>: ", $this->getFirstName(), " ", $this->getLastName();
        echo "<br><strong>Gender</strong>: ", $this->getGender();
        echo "<br><strong>Social Security Number</strong>: ", $this->getSSN();
    }
}
