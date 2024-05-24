<?php

namespace app\classes\characters;

class AldeanoChino extends Aldeano
{
    function __construct()
    {
        parent::__construct();
        $this->setBonus(0);
    }
}
    //4- En el constructor de AldeanoChino setear en null el valor del atributo bonus.