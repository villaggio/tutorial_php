<?php

trait Job {
    
    private $company;
    
    public function getCompany(){
        return $this->company;
    }
    public function setCompany($company){
        $this->company = $company;
    }
    
    public function toString(){
        return $this->oldString(). " Compagnia: ".$this->company;
    }
}

