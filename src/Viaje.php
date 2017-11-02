<?php

namespace TpFinal;

class Viaje
{
    protected $tipo, $monto, $transporte, $fecha_y_hora;

    public function __construct ($monto, Transporte $transporte) {
        $this->tipo = ('Colectivo' == get_class($transporte)) ? 'En colectivo' : 'En bicicleta';
        $this->monto = $monto;
        $this->transporte = $transporte;
        $this->fecha_y_hora = time();
    }
    
    public function trasbordo(Transporte $transporte) {
        $flag = (($this->get_fecha_y_hora() + 3600) >= time() && $transporte->get_linea() != $this->get_transporte()->get_linea()) ? true : false;
        return $flag;
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
