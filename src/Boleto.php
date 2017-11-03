<?php
/*

//require 'Viaje.php';

namespace TpFinal;

class Boleto
{
    protected $tipos_boleto = [
        'Normal',
        'Plus',
        'Medio',
        'Bicicleta',
    ];

    protected $tipo_boleto, $saldo, $id, $linea;

    public function __construct($tipo_boleto, $saldo, $id, $linea)
    {
        $this->tipo_boleto = $tipos_boleto;
        if(in_array($tipo_boleto, $this->tipos_boleto) == false) {
            throw new Exception("No es un tipo de boleto valido.");
        }
        $this->saldo = $saldo;
        $this->id = $id;
        $this->linea = $linea;
    }
    
    public function get_tipo_boleto(Transporte $transporte) {
        return $this->tipo_boleto;
    }

    public function descontar_o_plus() {
        if (2 >= $this->viajes_plus ) {
            $this->saldo -= $monto;
            if ( 0 > $this->saldo_acual ) {
                $this->viajes_plus++;
            }
            return true;
        } else {
            return false;
        }
    }

    public function get_boleto($tipo_boleto) {
        print("\n" . $this->get_fecha_y_hora() . "\n" . $this->tipo_boleto . "\n" . $this->saldo . "\n" . $this->id . "\n" $this->linea);
    }
}
*/
