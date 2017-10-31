<?php

namespace TpFinal;

//require 'Viaje.php';
//require 'Boleto.php';
//require 'Transporte.php';

class Tarjeta
{
    protected $transporte, $fecha_y_hora, $monto, $saldo, $viajes_realizados, $viajes_plus;

    public function __construct($id) {
        $this->id = $id;
        $this->saldo = $this->viajes_plus = 0;
        $this->viajes_realizados = array();
    }

    public function pagar(Transporte $transporte, $fecha_y_hora, $tipo) {
        if ('Colectivo' == get_tipo($transporte)){
            if (! in_array($tipo, $this->tipos_boletos)) {
            return;
        }
        $array_viajes = $this->viajes_realizados();
        $ultimo_viaje = end($array_viajes);
        if ($transporte instanceof Colectivo) {
            if (false == $ultimo_viaje) {
                $monto = $transporte->get_normal($tipo);
                $viaje = new Viaje($transporte, $monto);
                $this->viajes_realizados[] = $viaje;
                $this->descontar_o_plus($monto);
                get_boleto($tipo);
            } elseif ($ultimo_viaje->trasbordo($transporte)) {
                $monto = $transporte->get_trasbordo($tipo);
                $viaje = new Viaje($transporte, $monto);
                $this->viajes_realizados[] = $viaje;
                $this->descontar_o_plus($monto);
                get_boleto($tipo);
                } else {
                    $monto = $transporte->get_normal($tipo);
                    $viaje = new Viaje($transporte, $monto);
                    $this->viajes_realizados[] = $viaje;
                    $this->descontar_o_plus($monto);
                    get_boleto($tipo);
                }
        } else {
            $flag = 1;
            foreach($this->get_viajes_realizados() as $viaje) { 
                if ('En bicicleta' == $viaje->get_tipo() && ($viaje->get_fecha_y_hora() + 86400) <= time()) {
                    $flag = 0;
                    break;
                }
            }
            if ($flag == 1) {
                $monto = $transporte->get_boleto_bici();
                $viaje = new Viaje($transporte, $monto);
                $this->viajes_realizados[] = $viaje;
                $this->descontar_o_plus($monto);
                get_boleto($tipo);
            } else {
                $monto = 0.0;
                $viaje = new Viaje($transporte, $monto);
                $this->viajes_realizados[] = $viaje;
                $this->descontar_o_plus($monto);
                get_boleto($tipo);
            }
        }
    }

    public function recargar($monto) {
        if( $monto == 332) {
            $this->saldo += 388;
            print("\nSe acredito tu recarga de $" . $this->monto . " a la tarjeta más una suma de $56.");
        } else {
            if ($monto == 500) {
                $this->saldo += 652;
                print("\nSe acredito tu recarga de $" . $this->monto . " a la tarjeta más una suma de $140.");
            }
        } else {
            $this->saldo += $monto;
            print("\nSe acredito tu recarga de $" . $this->monto . " a la tarjeta.");
        }
        return 0;
    }

    public function get_saldo() {
        print("\nSu saldo actual es de $" . $this->saldo_actual);
    }

    public function get_viajes_realizados() {
        return $this->viajes_realizados;
    }
}
