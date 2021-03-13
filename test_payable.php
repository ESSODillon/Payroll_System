<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: test_payable.class.php
 * Description: The client program. Tests every class in this project, and Payable class hierarchy. SHOW POLYMORPHISM. Display  string representations of each object type.
*/

require "autoloading.php";
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Payroll System</title>
</head>

<body>
<?php


echo "<h2>Payroll System Programmed with OOP</h2>";
echo "<p>*****************************************************</p>";

$iv1 = new Invoice("Samsung Galaxy S11", 525.29, 1);
echo "<div>", $iv1->toString(), "</div>";

$iv2 = new Invoice("Stainless Steel Dog Bowl", 9.99, 2);
echo "<div>", $iv2->toString(), "</div>";
echo "<p>*****************************************************</p>";

echo "<h2>Testing the nameable interface with the Person class hierarchy</h2>";
echo "<p>*****************************************************</p>";

$pe1 = new Person("James", "Smith", "Male", 327314323);
echo "<div>", $pe1->toString(), "</div>";

$pe2 = new Person("Selena", "Gonzalez", "Female", 306324294);
echo "<div>", $pe2->toString(), "</div>";
echo "<p>*****************************************************</p>";

/* abstract so cannot be instantiated
DO NOT UNCOMMENT BLOCK
echo "<h2>Testing the nameable interface with the Employee class hierarchy</h2>";
echo "<p>*****************************************************</p>";


$em1 = new Employee("Pam", 38585578, 2005);
echo "<div>", $em1->toString(), "</div>";

$em2 = new Employee("Jim", 38584583, 2005);
echo "<div>", $em2->toString(), "</div>";
echo "<p>*****************************************************</p>";
*/

/*
echo "<h2>Testing the nameable interface with the Secretary class hierarchy</h2>";
echo "<p>*****************************************************</p>";

$se1 = new Secretary("Pam", 38585578, 16, 22.02, 40);

echo "<p>*****************************************************</p>";


echo "<h2>Testing the nameable interface with the Manager class hierarchy</h2>";
echo "<p>*****************************************************</p>";

$ma1 = new Manager("Jim", 38584583, 16,"sales", 80000);
echo "<div>", $ma1->toString(), "</div>";

echo "<p>*****************************************************</p>";

echo "<h2>Testing the nameable interface with the SalesPerson class hierarchy</h2>";
echo "<p>*****************************************************</p>";

$sa1 = new SalesPerson("Isabel", 3584584, 19, 45, 46.20);
echo "<div>", $sa1->toString(), "</div>";

echo "<p>*****************************************************</p>";

echo "<h2>Testing the nameable interface with the ExecutiveManager class hierarchy</h2>";
echo "<p>*****************************************************</p>";

$ex1 = new ExecutiveManager("Michael", 1585489, 19, "sales", 96679, 2000);
echo "<div>", $ex1->toString(), "</div>";

echo "<p>*****************************************************</p>";
*/

?>
</body>

</html>
