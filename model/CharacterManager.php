<?php
class CharacterManager{
    private $_db;

    public function __Construct(PDO $db){
        return $this->stDb($db);

    }


    public function getDb(){

        return $this->_db;

    }

    public function setDb(PDO $db){

        $this->_db = $db;

    }

    public function add(Character $character){

        $query = $this->getDb()->query('SELECT * FROM mini_jeu');

        $plays = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($plays as $play) {
            $arrayOfChrachters[] = new Character($play);
          }
          return $arrayOfChrachters;
        }

        public function addCharacter(Character $play){
        
          $query = $this->getDb()->prepare('INSERT INTO fight(name, damage) VALUES(:name, :damage)');
    
          $query->bindValue(':name', ':damage', $play->getName(), $play->getDamage(), PDO::PARAM_STR);
      
          $query->execute();
        }

}
?>