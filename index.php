<?php    
require_once "classes/person.php";
require_once "classes/employees.php";    
 
$customer1 = new Person("Giuseppe Rossi","34");
echo $customer1->toString();
echo "<br>";
$customer2 = Person::generatePersonByName("Giuseppe Rossi");
echo $customer2->toString();
echo "<br>";
$customer3 = Person::generatePersonByAge(44);
echo $customer3->toString();
echo "<br>";
$customer4 = new Employees("Mario",33,"AD");
echo $customer4->oldString();
echo "<br>";
$customer4->setCompany("Apple");
echo $customer4->toString();
?>
