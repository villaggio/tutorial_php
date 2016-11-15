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
         
        protected function get_age(){
            return $this->age;               
        }
             
        public function print_age(){
            return $this->get_age();
        }
        
        public function toString(){
            return "Nome: ".$this->name."<br>Eta: ".$this->age."<br>";
        }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

