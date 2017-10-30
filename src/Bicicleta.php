<?php

namespace TpFinal;

class Bicicleta
{
    protected $tarifa_diaria = 14.55;
    protected $patente;

    public function __construct($patente) {
        $this->patente = $patente;
    }

    public function get_unidad() {
        return $this->patente;
    }

    public function get_boleto_bici() {
        return $this->tarifa_diaria;
    }
}
