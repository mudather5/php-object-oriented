<?php

class Character{
    private $_id,
            $_name,
            $_damages;

    const Me = 1;
    const Character_attake = 2;
    const Character_hit = 3;

    /**
     * __construct
     *
     * @param  mixed $array
     *
     * @return void
     */
    public function __construct(array $array){

        $this->hydrate = ($array);

    }

    /**
     * hydrate
     *
     * @param  mixed $array
     *
     * @return void
     */
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

    /**
     * hit
     *
     * @param  mixed $character
     *
     * @return void
     */
    public function hit(Character $character){

        if($character->id() == $this->_id){

            return self::Me;
        }

        return $character->receiveDamages();


    }

    /**
     * receiveDamages
     *
     * @return void
     */
    public function receiveDamages(){

        if($this->damages >= 100){

            return self:: Character_attake;
        }

        return self:: Character_hit;
    }
    



    /**
     * getId
     *
     * @return void
     */
    public function getId(){

        return $this->_id;
    }

    /**
     * getName
     *
     * @return void
     */
    public function getName(){

        return $this->_name;
    }

    /**
     * getDamages
     *
     * @return void
     */
    public function getDamages(){

        return $this->_damages;
    }

    

    /**
     * setId
     *
     * @param  mixed $id
     *
     * @return void
     */
    public function setId(int $id){

        $this->_id = $id;
    }


    /**
     * setName
     *
     * @param  mixed $name
     *
     * @return void
     */
    public function setName(string $name){

        $this->_name = $name;
    }


    /**
     * setDamages
     *
     * @param  mixed $damages
     *
     * @return void
     */
    public function setDamages(int $damages){

        $this->_damages = $damages;
    }

}

?>