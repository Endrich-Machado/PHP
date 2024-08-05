<?php


class Pessoa {

    //atributo
public $name;

//método
public function falar(){
    return "O meu nome é: " . $this->name;
}


}
$pes = new Pessoa();
$pes->name = "Endrich Assunção";

echo $pes->falar();