<?php
class City{
    public $name;
    public $department;
   
    
    public function theCity()
    {
           
        echo "la ville est ".$this->name.", se situe dans le département ".$this->department;
       
    }

              
  }
  
$city = new City();
$city->name = "Lille";
$city->department = "Nord-Pas de Calais";
$city->theCity();