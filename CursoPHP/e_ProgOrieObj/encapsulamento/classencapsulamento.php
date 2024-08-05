<?php

class Pessoa{
    public $name;
    protected $cpf;
    private $Salario;

    public function __construct($a, $b, $c)
    {
        $this->name = $a;
        $this->cpf = $b;
        $this->Salario = $c;
    }

   

    public function __toString()
    {
        return "nome: " . $this->name."<br>" .$this->cpf."<br>". $this->Salario;
    }

}
// mas não recebes dados privados
class Programador extends Pessoa{
    public function __toString()
    {
        //salário não pode ser acessado por estar privado, ele nem existe nesse contexto
        return "nome: " . $this->name."<br>" .$this->cpf."<br>";//. $this->Salario;
    }
}

$program = new Pessoa("Jose", "12121212", 123.00);
$program2 = new Programador("Jose", "12121212", 1234);
echo $program2;




