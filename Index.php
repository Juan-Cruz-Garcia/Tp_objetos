<?php

use app\classes\characters\AldeanoChino;
use app\classes\characters\AldeanoFranco;
use app\classes\characters\pesquero;
use app\classes\objects\Arbusto;
use app\classes\objects\BancoDePesca;

require 'vendor/autoload.php';



// echo 'aldeano <br>';
// $aldeano = new Aldeano;
// $arbusto = new Arbusto;

// $aldeano->recolectar($arbusto);
// // Se debe ver el echo que devuelve el método recolectar

echo 'pesquero <br>';
$pesquero = new pesquero;
$bancoDePesca = new BancoDePesca;

$pesquero->recolectar($bancoDePesca);
// Se debe ver el echo que devuelve el método recolectar

// // ------

$aldeanoChino = new AldeanoChino;
$aldeanoFranco = new AldeanoFranco;
$arbusto1 = new Arbusto;
$arbusto2 = new Arbusto;

$aldeanoChino->recolectar($arbusto1);
// Se debe ver el echo que devuelve el método recolectar sin bonus

$aldeanoFranco->recolectar($arbusto2);
// Se debe ver el echo que devuelve el método recolectar con el bonus del 25%