<?php

class employe{
    private ?int $id=null ;
    private ?string $firstName ;
    private ?string $lastName ;
    private ?string $email  ;
    private ?DateTime $DoB ;
    public function __construct($a , $b , $c , $d , $e)
    {
        $this->id=$a ;
        $this->firstName=$b ;
        $this->lastName=$c ;
        $this->email=$d ;
        $this->DoB=$e ;  
    }
    public function getid(){
        return $this->id ;
    }
    public function getfirstName(){
        return $this->firstName ;
    }
    public function getlastName(){
        return $this->lastName ;
    }
    public function getemail(){
        return $this->email ;
    }
    public function getDoB(){
        return $this->DoB ;
    }
    public function setfirstName($b){
        $this->firstName=$b ;
    }
    public function setlastName($c){
        $this->lastName=$c ;
    }
    public function setemail($d){
        $this->email=$d ;
    }
    public function setDoB($e){
        $this->DoB=$e ;
    }
    


}



?>