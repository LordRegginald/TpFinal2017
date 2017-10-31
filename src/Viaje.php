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
    
    public function transbordo(Transporte $transporte) {
    if (date() > date("Y-m-d H:i", strtotime('monday this week', "06:00")) && date() < date("Y-m-d H:i", strtotime('friday this week'), "22:00") || date() > date("Y-m-d H:i", strtotime('saturday this week', "06:00")) && date() < date("Y-m-d H:i", strtotime('saturday this week', "14:00"))) {
        $flag = (($this->get_fecha_y_hora() + 3600) <= time() && $this->linea != $linea) ? true : false;
        return $flag;
    } elseif (date() > date("Y-m-d H:i", strtotime('saturday this week', "14:00")) && date() < date("Y-m-d H:i", strtotime('saturday this week'), "22:00") || date() > date("Y-m-d H:i", strtotime('sunday this week', "06:00")) && date() < date("Y-m-d H:i", strtotime('sunday this week', "22:00"))){
        $flag = (($this->get_fecha_y_hora() + 5400) <= time() && $this->linea != $linea) ? true : false;
        return $flag;
    } elseif (date() > date("Y-m-d H:i", strtotime("22:00")) && date() < date("Y-m-d H:i", strtotime("06:00"))) {
        $flag = (($this->get_fecha_y_hora() + 5400) <= time() && $this->linea != $linea) ? true : false;
        return $flag;
    }
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
