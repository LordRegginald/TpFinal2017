<?php

namespace TpFinal;

class Viaje {
    protected $tipo, $monto, $transporte, $fecha_y_hora;

    public function __construct ($monto, Transporte $transporte) {
    $this->tipo=$tipo;
    $this->monto=$monto;
    $this->transporte=$transporte;
    $this->fecha_y_hora = time();
    }

    public function get_tipo() {
       return $this->tipo;
    }

    public function get_monto() {
       return $this->monto;
    }

    public function get_transporte() {
       return $this->transporte;
    }

    public function get_fecha_y_hora() {
        return $this->fecha_y_hora;
    }
}
