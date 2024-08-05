<?php
//tbm chamados de métodos mágicos geralmente eles começam com __ .
class Pessoa{
    public $nome;
    public $sobrenome;
    public $idade;

    public function __construct($a,$b,$c,){
        $this->nome = $a;
        $this->sobrenome = $b;
        $this->idade = $c;
    }
    
    public function __toString()
    {
        return $this->nome . " " . $this->sobrenome. "<br> Idade: " . $this->idade;
    }
    
}

$eu = new Pessoa("Endrich", "Machado", 34);// instanciado com construtor.
//utilizando o método mágico __toString

echo $eu;