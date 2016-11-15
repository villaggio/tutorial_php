<?php
abstract class Student{
    private $nomeCorso;
    private $livelloApprendimento;
    
    protected function getNomeCorso(){
        return $this->nomeCorso;
    }
    
    public function setNomeCorso($nomeCorso){
        $this->nomeCorso = $nomeCorso;
    }
    
    protected function getLivelloApprendimento(){
        return $this->livelloApprendimento;
    }
    
    function setLivelloApprendimento($livelloApprendimento){
        $this->livelloApprendimento = $livelloApprendimento;
    }
    
    public abstract function toFullString();
    
}
