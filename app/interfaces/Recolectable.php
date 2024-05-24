<?php
namespace app\interfaces;

interface Recolectable
{
    public function getAlimento() : int; 
}

// La interfaz Recolectable debe tener un único método llamado getAlimento que devuelva un
// entero.