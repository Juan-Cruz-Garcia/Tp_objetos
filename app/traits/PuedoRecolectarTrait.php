<?php

namespace app\traits;

use app\interfaces\Recolectable;

trait PuedoRecolectar
{
    private $velocidadRecoleccion;


    public function recolectar(Recolectable $recolectable): void
    {
        $recoletcado = ceil($recolectable->getAlimento() / $this->velocidadRecoleccion);

        echo 'termine de recolectar en ' . $recoletcado . 'segundos <br>';
    }
}
// El trait PuedoRecolectar va a
// implementar el método recolectar de la interfaz Recolectar. Mientras que el trait
// TengoComida va a implementar el método getAlimento de la interfaz Recolectable.

// 6- Modificar el trait PuedoRecolectar para que tenga en cuenta el valor del bonus para hacer
// el cálculo en el método recolectar. Es decir, si un aldeano sin bonus (los aldeanos chinos)
// recolectan alimento a 18 unidades por minuto, un aldeano con un bonus del 25% (aldeano
// franco) va a recolectar esa cantidad un 25% más rápido: 23 unidades por minuto (recordar
// que siempre vamos a usar ceil para redondear todos los valores).