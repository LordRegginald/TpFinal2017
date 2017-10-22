<?php

namespace TpFinal;

include 'Viaje.php';

class Tarjeta {
    protected $transporte, $fecha_y_hora, $monto, $saldoactual, $viajes_realizados;

    public function pagar(Transporte $transporte, $fecha_y_hora) {
        if('Colectivo' == get_tipo($transporte)){
            
        }
        
    };

    public function recargar($monto) {
        if($monto == 332) {
            $this->saldoactual += 388;
            print("Se acredito tu recarga de $" . $this->monto . " a la tarjeta más una suma de $56.\n");
        }else{
            if($monto == 500) {
                $this->saldoactual += 652;
                print("Se acredito tu recarga de $" . $this->monto . " a la tarjeta más una suma de $140.\n");
            }
        }else{
            $this->saldoactual += $monto;
            print("Se acredito tu recarga de $" . $this->monto . " a la tarjeta.\n");
        }
        return 0;
    }

    public function saldo() {
        print("Su saldo actual es de $" . $this->saldoactual . ".\n");
    }

    public function viajesRealizados() {
        return $this->viajes_realizados;
    };
}
