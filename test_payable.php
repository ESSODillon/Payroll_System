<?php
/*
 * Author: Dillon Polley
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

    // Header for the client program, and asterisk content divider
    echo "<h2>Payroll System Programmed with OOP</h2>";
    echo "<p>*****************************************************</p>";

    // First instance of an invoice, and turns it into a string.
    $iv1 = new Invoice("Samsung Galaxy S11", 525.29, 1);
    echo "<div>", $iv1->toString(), "</div>";
    echo "<p>*****************************************************</p>";

    // Second instance of an invoice, and turns it into a string
    $iv2 = new Invoice("Stainless Steel Dog Bowl", 9.99, 2);
    echo "<div>", $iv2->toString(), "</div>";
    echo "<p>*****************************************************</p>";

    // Manager header, instance of a manager, and turns it into a string
    echo "<h3>Manager</h3>";
    $ma1 = new Manager("Carter", "Smith", "Male", "111-11-1111", 10299932, 5, "Research & Development", 3800);
    echo "<div>", $ma1->toString(), "</div>";
    echo "<p>*****************************************************</p>";

    // Instance of an Executive Manager, and turns it into a string
    $ex1 = new ExecutiveManager("Karen", "Price", "Female", "330-31-3535", 10234421, 3, "Marketing", 3200, 500);
    echo "<div>", $ex1->toString(), "</div>";
    echo "<p>*****************************************************</p>";

    // Instance of a Secretary, and turns it into a string
    $sc1 = new Secretary("Sue", "Jones", "Female", "210-09-7898", 19002319, 4, 40, 50);
    echo "<div>", $sc1->toString(), "</div>";
    echo "<p>*****************************************************</p>";

    // First instance of a Sales Person, and turns it into a string
    $sa1 = new SalesPerson("Bob", "Lewis", "Male", "567-80-1257", 29092387, 3, 17090, 16.23);
    echo "<div>", $sa1->toString(), "</div>";
    echo "<p>*****************************************************</p>";

    // Second instance of a Sales Person, and turns it into a string
    $sa2 = new SalesPerson("Katherine", "Lewis", "Female", "345-40-7521", 46292345, 5, 15090, 15.98);
    echo "<div>", $sa2->toString(), "</div>";
    echo "<p>*****************************************************</p>";

    // Shows the number of Invoices created so far
    echo "<strong>Number of invoices</strong>: ", Invoice::getInvoiceCount();
    // Shows the number of employees created so far
    echo "<br><strong>Number of employees</strong>: ", Employee::getEmpCount();

    ?>
</body>

</html>