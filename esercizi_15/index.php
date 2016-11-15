<?php    
require_once "classes/employees.php";    
 
$customer1 = new Employees("Giuseppe Rossi","34", "AD");
echo $customer1->toString();
echo "<br>";
$customer1->setLivelloApprendimento(10);
$customer1->setNomeCorso("FrontEnd Dev");
echo $customer1->toFullString();
echo "<br>";
$customer2 = clone $customer1;
$customer2->name = "Filippo Bianchi";
$customer2->setBestFriend($customer1);
//
var_dump($customer2);
