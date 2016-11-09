<?php 
    // dichiarazione della classe Person
    class Person {
            public $name; // visibile ovunque nello script
            protected $id_rif; // visibile nella superclasse e nella sottoclasse
            private $password; // Visibile solo nella classe Person
                 
            // costruttore
            public function __construct()
            {
                echo "Chiamata costruttore della Superclasse"."<br>";
                // inizializzazione della proprietà $name   
                $this->name = "Giuseppe Rossi";
            }   
             
            // metodi
            public function getName() {
                // restituisce il nome
                return $this->name;
            }               
 
            public function setPassword($password) {
                // imposta la password
                 $this->password = $password; 
            }
             
    }
 
    // definizione della sottoclasse Employees
    class Employees extends Person {
        public $profile;
         
        public function __construct($profile, $password) // costruttore della sottoclasse
        {
            parent::__construct();
            $this->setPassword($password); 
            $this->profile=$profile; // inizializzazione della nuova proprietà della sottoclasse         
        }   
         
        function setId($id_rif) {               
            $this->id_rif = $id_rif;
        }
    }   
         
    // istanzia un nuovo oggetto della classe Person
    $customer = new Person();
    echo "Customer: ".$customer->getName()."<br />";
                
    $employee = new Employees("Amministratore","XUHjLoo");
    print_r(get_object_vars($employee));
    $employee->name = "Mario Rossi";
    $employee->setId(7);
     
    // restituisce un array associativo dell'oggetto
    print_r(get_object_vars($customer));
    print_r(get_object_vars($employee));
?>
