<?php

namespace TpFinal;

class Colectivo
{
    protected $montos_normales = array(
        'Normal' => 9.70,
        'Medio' => 4.85,
    );
    protected $montos_de_trasbordo = array(
        'Normal' => 2.64,
        'Medio' => 1.32,
    );
    protected $linea;

    public function __construct($linea) {
        $this->linea = $linea;
    }

    public function get_linea() {
        return $this->linea;
    }
	
    public function get_normal($tipo) {
        return $this->montos_normales[$tipo];
    }

    public function get_trasbordo($tipo_boleto) {
        return $this->montos_de_trasbordo[$tipo];
    }
}
