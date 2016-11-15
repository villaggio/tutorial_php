<?php
require_once "person.php";
require_once "student.php";
  // definizione della sottoclasse Employees
    class Employees extends Student implements Person {
        public $name;
        private $age;
        public $profile;
         
        public function __construct($name, $age, $profile) // costruttore della sottoclasse
        {           
            $this->name=$name; // inizializzazione della nuova proprietà della sottoclasse         
            $this->age=$age; // inizializzazione della nuova proprietà della sottoclasse         
            $this->profile=$profile; // inizializzazione della nuova proprietà della sottoclasse         
        }
        
        public function print_age() {
            return $this->age;
        }
        
        public function toString(){
            $output = "Name: ".$this->name."<br>";
            $output .= "Age: ".$this->age."<br>";
            $output .= "Profilo: ".$this->profile."<br>";
            return $output;
        }
        
        public function toFullString() {
            $output = $this->toString();
            $output .= "Nome Corso: ".$this->getNomeCorso()."<br>";
            $output .= "Livello Apprendimento: ".$this->getLivelloApprendimento()."<br>";
            return $output;
        }
    }   

