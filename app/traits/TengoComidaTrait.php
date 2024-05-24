<?php
namespace app\traits;

trait TengoComida
{
    private $cantidadAlimento;

    public function getAlimento(): int
    {
        return $this->cantidadAlimento;
    }
}
// 8 - Crear los traits PuedoRecolectar y TengoComida. El trait PuedoRecolectar va a
// implementar el método recolectar de la interfaz Recolectar. Mientras que el trait
// TengoComida va a implementar el método getAlimento de la interfaz Recolectable.