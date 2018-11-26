<?php
class CharacterManager{
    private $_db;

    /**
     * __Construct
     *
     * @param  mixed $db
     *
     * @return void
     */
    public function __Construct(PDO $db){

        return $this->setDb($db);

    }


    /**
     * getDb
     *
     * @return void
     */
    public function getDb(){

        return $this->_db;

    }

    /**
     * setDb
     *
     * @param  mixed $db
     *
     * @return void
     */
    public function setDb(PDO $db){

        $this->_db = $db;

    }

    /**
     * getCharacter
     *
     * @return void
     */
    public function getCharacters(){
        
        $arrayOfCharachters = [];

        $query = $this->getDb()->query('SELECT * FROM fight');

        $characters = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($characters as $character) {

            $arrayOfCharachters[] = new Character($character);
          }
          return $arrayOfCharachters;
        }

        /**
         * addCharacter
         *
         * @param  mixed $character
         *
         * @return void
         */
        public function addCharacter(Character $character){
        
          $query = $this->getDb()->prepare('INSERT INTO fight(name, damage) VALUES(:name, :damage)');
          
          $query->bindValue(':name', $character->getName(), PDO::PARAM_STR);
          $query->bindValue(':damage', 0, PDO::PARAM_INT);
          $query->execute();
            
        }


        public function get_name()
        {
            return $this->_name;
        }

        public function set_name(string $postName)
        {
            if(strlen($getName) <= 25)
            {
                $this->_name = $posName;
                return $this;
            }
        }

//         $charaManager = new CharacterManager();

//         $post = $charaManager->set_name($_POST['name']);
 }

?>