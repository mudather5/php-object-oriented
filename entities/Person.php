<?php

class Person{

    private $_firstname;
    private $_lastname;
    private $_address;

    public function __construct($firstname, $lastname, $address){

        $this->setFname($firstname);
        $this->setLname($lastname);
        $this->setAddress($address);

    }

    public function setFname($firstname){

        $this->_firstname = $firstname;

    }

    public function setLname($lastname){

        $this->_lastname = $lastname;

    }

    public function setAddress($address){

        $this->_address = $address;

    }

    public function getFname(){
        return $this->_firstname;
    }

    public function getlname(){
        return $this->_lastname;
    }

    public function getAdress(){

        return $this->_address;
    }

    public function personInfo(){

          echo "Firs tname: ".$this->getFname()."<br>"."Last name: ".$this->getLname()."<br> "."Address: ".$this->getAdress();
    }

}

$john = new Person("John", "Nono", "16 Rue de Lannoy Lille");
$john->personInfo();