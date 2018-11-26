<?php

 declare(strict_types = 1);

class Person{

    private $_firstname;
    private $_lastname;
    private $_address;

    /**
     * __construct
     *
     * @param  mixed $firstname
     * @param  mixed $lastname
     * @param  mixed $address
     *
     * @return void
     */
    public function __construct($firstname, $lastname, $address){

        $this->setFname($firstname);
        $this->setLname($lastname);
        $this->setAddress($address);

    }



    /**
     * setFname
     *
     * @param  mixed $firstname
     *
     * @return void
     */
    public function setFname(string $firstname){

        $this->_firstname = $firstname;

    }

    

    /**
     * setLname
     *
     * @param  mixed $lastname
     *
     * @return void
     */
    public function setLname(string $lastname){

        $this->_lastname = $lastname;

    }

    /**
     * setAddress
     *
     * @param  mixed $address
     *
     * @return void
     */
    public function setAddress($address){

        $this->_address = $address;

    }

    /**
     * getFname
     *
     * @return void
     */
    public function getFname(){
        
        return $this->_firstname;
    }

    /**
     * getlname
     *
     * @return void
     */
    public function getlname(){

        return $this->_lastname;
    }

    /**
     * getAdress
     *
     * @return void
     */
    public function getAdress(){

        return $this->_address;
    }

    /**
     * personInfo
     *
     * @return void
     */
    public function personInfo(){

          echo "Firs tname: ".$this->getFname()."<br>"."Last name: ".$this->getLname()."<br> "."Address: ".$this->getAdress();
    }

}

$john = new Person("John", "Nono", "16 Rue de Lannoy Lille");
$john->personInfo();


