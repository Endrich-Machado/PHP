<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
    
}
//classe abstrata que implementa uma interface
// uma classe pode implementar várias interfaces

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "O veículo acelerou até " . $velocidade . "km/h";

    }

    public function freiar($velocidade){

        echo "O veículo freiou até " . $velocidade . "km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veículo engatou a marcha " . $marcha;

    }

}
// uma classe pode estender uma classe abstrata, classes abstratas não podem ser instânciada
class DelRey extends Automovel {

    public function empurrar(){

    }
}