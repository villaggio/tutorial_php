<?php    
require_once "classes/employees.php";    
 
$customer1 = new Employees("Giuseppe Rossi","34", "AD");
echo $customer1->toString();
echo "<br>";
?>
