<?php
namespace app\classes\characters;

class AldeanoFranco extends Aldeano
{
    function __construct()
    {
        parent::__construct();
        $this->setBonus(25);
    }
}


// 5- En el constructor de AldeanoFranco setear en 25 el valor del atributo bonus. El valor del
// bonus es un valor entero que indica un porcentaje. En este caso 25%.