<?php
/*
 * Author: Group 5
 * Date: 3/13/21
 * Name: test_payable.class.php
 * Description: The client program. Tests every class in this project, and Payable class hierarchy. SHOW POLYMORPHISM. Display  string representations of each object type. 
*/
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Payroll System</title>
</head>

<body>
    <?php

    require_once "autoloading.php";
    echo "<h2>Payroll System Programmed with OOP</h2>";
    echo "<p>*****************************************************</p>";

    $iv = new Invoice("Samsung Galaxy S11", "$525.29", 1);

    echo "<div>", $iv->toString(), "</div>";

    ?>
</body>

</html>