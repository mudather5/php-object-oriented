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



class Cities{
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
  $town = new Cities("Lille", "Nord-Pas de Calais");
  
  echo $town->getName()."<br>".$town->getDepartment()."<br>";




  class Count{

    public static $count = 0;

    public function __construct(){

        self::$count++;
    }

    public static function getCount(){

        return self::$count;
    }
  }


  $test1 = new Count;
  $test2 = new Count;
  $test3 = new Count;

  echo Count::getCount();















 

