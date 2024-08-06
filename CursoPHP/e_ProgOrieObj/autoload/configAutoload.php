<?php

function incluirClasse($newCLass){
    if(file_exists($newCLass . ".php")){
        require_once($newCLass . ".php");
    }
}


spl_autoload_register("incluirClasse");

spl_autoload_register(function($newCLass){
    if(file_exists("autoload" . DIRECTORY_SEPARATOR . $newCLass . ".php")){
        require_once("autoload" . DIRECTORY_SEPARATOR . $newCLass . ".php");
    }
});

$celta = new Carros;
echo $celta->acelerar(100);

?>