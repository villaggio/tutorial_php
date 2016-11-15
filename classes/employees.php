<?php
require_once "person.php";
require_once "job.php";
  // definizione della sottoclasse Employees
    class Employees extends Person {
        use Job;
        
        public $profile;
         
        public function __construct($name, $age, $profile) // costruttore della sottoclasse
        {           
            parent::__construct($name, $age);
            $this->profile=$profile; // inizializzazione della nuova proprietà della sottoclasse         
        }
        
        public function oldString(){
            return parent::toString()."Profilo: ".$this->profile."<br>";
        }
    }   

