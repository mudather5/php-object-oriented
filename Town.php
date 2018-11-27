<?php
class Town{
    public $name;
    public $department;
   
    
    /**
     * theTown
     *
     * @return void
     */
    public function theTown()
    {
           
        echo "la ville est ".$this->name.", se situe dans le département ".$this->department;
       
    }

              
  }
  
$town = new Town();//for creating new object
$town->name = "Lille";
$town->department = "Nord-Pas de Calais";
$town->theTown();