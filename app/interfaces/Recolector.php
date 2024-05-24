<?php
namespace app\interfaces;

interface Recolector
{
    public function recolectar(Recolectable $recolectable): void;
}
// La interfaz Recolectar debe tener declarada la firma de un método llamado recolectar que espera como
// único parámetro una instancia de Recolectable.
