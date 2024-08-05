<?php
//Classe do objeto.
class Carro {
//atributos
public $modelo;
public $nome;
public $quatroPortas;


//getters
public function getModelo(){
    return $this->modelo;
}
//setters
public function setModelo($modelo){
    $this->modelo = $modelo;
}

public function getnome(){
    return $this->nome;
}

public function setNome($nome){
    $this->nome = $nome;
}


public function getquatroPortas(){
    return $this->quatroPortas;
}

public function setQuatroPortas($quatroPortas){
    $this->quatroPortas = $quatroPortas;
}

public function exibir(){
    echo $this->getModelo() . "<br>";
    echo $this->getnome() . "<br>";
    echo "<br>" . $this->getquatroPortas();
}

}

//instancia de um carro
$getCar = new Carro();
$getCar->setModelo("Chevrolet");
$getCar->setNome("Onix");
$getCar->setQuatroPortas('true');
$getCar->exibir();