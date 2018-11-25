<?php

class Character{
    private $_id,
            $_name,
            $_damages;

    const Me = 1;
    const Character_attake = 2;
    const Character_hit = 3;

    public function __construct(array $array){

        $this->hydrate = ($array);

    }

    public function hydrate(array $array)

  {

    foreach ($array as $key => $value)

    {

      $method = 'set'.ucfirst($key);

      

      if (method_exists($this, $method))

      {

        $this->$method($value);

      }

    }

  }

    public function hit(Character $character){

        if($character->id() == $this->_id){

            return self::Me;
        }

        return $character->receiveDamages();


    }

    public function receiveDamages(){

        if($this->damages >= 100){

            return self:: Character_attake;
        }

        return self:: Character_hit;
    }


    public function getId(){

        return $this->_id;
    }

    public function getName(){

        return $this->_name;
    }

    public function getDamages(){

        return $this->_damages;
    }

    public function setId(int $id){

        $this->_id = $id;
    }


    public function setName(string $name){

        $this->_name = $name;
    }


    public function setDamages(int $damages){

        $this->_damages = $damages;
    }

}

?>