<?php
/*
 * Author: Dillon Polley
 * Date: 3/13/21
 * Name: payable.class.php
 * Description: Interface class
*/

// The interface that is implemented by Employee and Invoice classes
interface Payable
{
    // Abstract methods
    public function getPaymentAmount();
    public function toString();
}
