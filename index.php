<?php    
    class Person {
        public $name;
        private $age;
             
        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }
        
        public static function generatePersonByName($name){
            $p = new static($name, null);
            return $p;
        }
        
        public static function generatePersonByAge($age){
            $p = new static(null, $age);
            return $p;
        }
         
        private function get_age(){
            return $this->age;               
        }
             
        public function print_age(){
            return $this->get_age();
        }
        
        public function toString(){
            return "Nome: ".$this->name."<br>Eta: ".$this->age."<br>";
        }
        }
 
$customer1 = new Person("Giuseppe Rossi","34");
echo $customer1->toString();
$customer2 = Person::generatePersonByName("Giuseppe Rossi");
echo $customer2->toString();
$customer3 = Person::generatePersonByAge(44);
echo $customer3->toString();


?>
