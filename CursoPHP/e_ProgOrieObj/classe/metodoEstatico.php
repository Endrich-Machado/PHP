<?php

class Doc {
    public $num;


    public function setNum($num){
        //chamada do método estático. 
        $validado = DOc::ValidaNum($num);
        if($validado){
            $this->num = $num; 
        }else{
            $this->num = "NUll";
        }

    }

    public function getNum(){
        return $this->num;
    }
    //validações dentro da classe pode usar métodos estáticos para auxiliar nas validações
    public static function ValidaNum($num){
        if($num > 0){
            return true;
        }else{
            return false;
        }
    }
}

$newDoc = new Doc();
$newDoc->setNum(1);

echo $newDoc->getNum();