<?php

namespace TpFinal;

class Tarjeta {
    public function pagar(Transporte $transporte, $fecha_y_hora);
    public function recargar($monto);
    public function saldo() {
        return 0;
    }
    public function viajesRealizados();
}
