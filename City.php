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
     * @return void
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
     * @return void
     */
    public function setName($name){
        $this->name = $name;
    }
    /**
     * setDepartment
     *
     * @param  mixed $department
     *
     * @return void
     */
    public function setDepartment($department){
        $this->department = $department;

    }
    /**
     * getName
     *
     * @return void
     */
    public function getName(){
        return $this->name;

    }
    /**
     * getDepartment
     *
     * @return void
     */
    public function getDepartment(){
        return $this->department;
    }
              
  }


$town = new City("Lille", "Nord-Pas de Calais"); //new object

echo "Name of city is: ". $town->getName()."<br>";
echo "the department is: ".$town->getDepartment();
