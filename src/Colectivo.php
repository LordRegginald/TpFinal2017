<?php

namespace TpFinal;

class Colectivo extends Transporte
{
    protected $montos_normales = array(
        'Normal' => 9.70,
        'Medio' => 4.85,
    );
    protected $montos_de_trasbordo = array(
        'Normal' => 2.64,
        'Medio' => 1.32,
    );
    protected $linea, $empresa;

    public function __construct($linea, $empresa) {
        $this->linea = $linea;
        $this->empresa = $empresa;
    }

    public function get_linea() {
        return $this->linea;
    }

    public function get_empresa() {
        return $this->empresa;
    }

    public function get_normal($tipo) {
        return $this->montos_normales[$tipo];
    }

    public function get_trasbordo($tipo_boleto) {
        return $this->montos_de_trasbordo[$tipo];
    }
}
