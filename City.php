<?php


class City{
    public $name;
    public $department;
   
    
    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $department
     *
     * constructer function for initialising object's properties
     */
    public function __construct($name, $department)
    {
        $this->setName($name);
        $this->setDepartment($department);    
       
    }
    /**
     * setName
     *
     * @param  mixed $name
     *
     * function setter for the name which allows us to “set” the value of a given property.
     */
    public function setName($name){
        $this->name = $name;
    }
    /**
     * setDepartment
     *
     * @param  mixed $department
     *
     * function setter for the department which allows us to “set” the value of a given property.
     */
    public function setDepartment($department){
        $this->department = $department;

    }
    /**
     * getName
     *
     *function getName we use it in order to recover or “get” a given property
     */
    public function getName(){
        return $this->name;

    }
    /**
     * getDepartment
     *
     *function getDepartment we use it in order to recover or “get” a given property
     */
    public function getDepartment(){
        return $this->department;
    }
              
  }


$town = new City("Lille", "Nord-Pas de Calais"); //for creating a new object

echo "Name of city is: ". $town->getName()."<br>";
echo "the department is: ".$town->getDepartment();
