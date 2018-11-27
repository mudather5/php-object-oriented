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
     * constructer function for initialising object's properties
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
     * function setter for the firstname which allows us to “set” the value of a given property.
     */
    public function setFname(string $firstname){

        $this->_firstname = $firstname;

    }

    

    /**
     * setLname
     *
     * @param  mixed $lastname
     * function setter for the name which allows us to “set” the value of the name.
     *
     */
    public function setLname(string $lastname){

        $this->_lastname = $lastname;

    }

    /**
     * setAddress
     *
     * @param  mixed $address
     * function setter for the address which allows us to “set” the value of the address.
     * @return void
     */
    public function setAddress($address){

        $this->_address = $address;

    }

    /**
     * getFname
     *
     *function getFname we use it in order to bring back or “get” a given property
     */
    public function getFname(){
        
        return $this->_firstname;
    }

    /**
     * getlname
     *
     *function getLname we use it in order to retrieve or “get” a given property
     */
    public function getlname(){

        return $this->_lastname;
    }

    /**
     * getAdress
     *
     *function getFname we use it in order to retrieve or “get” a given property
     */
    public function getAdress(){

        return $this->_address;
    }

    /**
     * personInfo
     *
     * for displaing the values which we have created in new object
     */
    public function personInfo(){

          echo "Firs tname: ".$this->getFname()."<br>"."Last name: ".$this->getLname()."<br> "."Address: ".$this->getAdress();
    }

}

$john = new Person("John", "Nono", "16 Rue de Lannoy Lille");//for creating new object

$john->personInfo();


