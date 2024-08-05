<?php

$fn = function($a){

    var_dump($a);

};
echo "<br>";

$fn("Oi");

function test($callback){

    //processo lento

    $callback();

}

test(function(){

    echo "Terminou!";

})

?>