<?php


class City{
    public $name;
    public $department;
   
    
    public function __construct($name, $department)
    {
        $this->setName($name);
        $this->setDepartment($department);    
       
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setDepartment($department){
        $this->department = $department;

    }
    public function getName(){
        return $this->name;

    }
    public function getDepartment(){
        return $this->department;
    }
              
  }