<?php
require("../entities/City.php");


$town = new City("Lille", "Nord-Pas de Calais"); //new object for exercice2




?>

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
    
    $name = $_POST['name'];
    $damage = $_POST['admage'];
    
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