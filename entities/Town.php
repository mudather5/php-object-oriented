<?php
class Town{
    public $name;
    public $department;
   
    
    /**
     * theCity
     *
     * @return void
     */
    public function theCity()
    {
           
        echo "la ville est ".$this->name.", se situe dans le département ".$this->department;
       
    }

              
  }
  
$city = new Town();
$city->name = "Lille";
$city->department = "Nord-Pas de Calais";
$city->theCity();