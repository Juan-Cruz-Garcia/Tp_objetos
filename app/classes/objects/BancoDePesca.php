<?php
namespace app\classes\objects;

use app\interfaces\Recolectable;
use app\traits\TengoComida;

class BancoDePesca implements Recolectable
{
    use TengoComida;

    function __construct()
    {
        $this->cantidadAlimento = 225;
    }
}

// 5 - Crear la clase BancoDePesca que tenga un único método llamado getAlimento que
// devuelva un entero con la cantidad total de comida que posee. Para eso, bancoDePesca va
// a devolver el valor seteado en un atributo privado llamado cantidadAlimento. El atributo
// debe estar seteado al momento que se crea una instancia de bancoDePesca. Para todas
// las instancias el valor es el mismo: 225.