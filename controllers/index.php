

 <?php

function chargerClasse($classname)
{
    if(file_exists('../model/'. $classname.'.php'))
    {
        require '../model/'. $classname.'.php';
    }
    else 
    {
        require '../entities/' . $classname . '.php';
    }
}

if(isset($_POST['name']) AND isset($_POST['damage'])){
    
    $character = new Character(['name' => $_POST['name']]);
    
}

spl_autoload_register('chargerClasse');


$characterManager = new CharacterManager(Database::DB());

$newCharacter = new Character([
    "name" => "John",
    "damade"=> 0
    ]);
    
    $characterManager->addCharacter($newCharacter);
    
    $characters = $characterManager->getCharacter();
    
    
    include "../views/indexVue.php";
    
    
    ?>
    <!-- include "../views/template/indexVue.php"; -->