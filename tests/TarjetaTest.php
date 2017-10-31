<?php

namespace TpFinal;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase
{
    public function testSaldoCero() {
        $tarjeta = new Tarjeta(01234567);
        $this->assertEquals($tarjeta->saldo(), 0);
    }

    public function test1() {
        $tarjeta = new Tarjeta(11111111);
        $tarjeta->recargar(50);
        $this->assertEquals($tarjeta->get_saldo(), 50.0);
    }

    public function test2() {
        $tarjeta = new Tarjeta(22222222);
        $tarjeta->recargar(332);
        $this->assertEquals($tarjeta->get_saldo(), 338.0);
    }

    public function test3() {
        $tarjeta = new Tarjeta(33333333);
        $tarjeta->recargar(332);
        $colectivo144Negro = new Colectivo("144 Negro", "Rosario Bus");
        $tarjeta->pagar($colectivo144Negro, "2017/10/29 22:50", "Normal");
        $this->assertEquals($tarjeta->get_saldo(), 328.3);
    }

    public function test4() {
        $tarjeta = new Tarjeta(44444444);
        $tarjeta->recargar(50);
        $colectivo135 = new Colectivo("135", "Rosario Bus");
        $tarjeta->pagar($colectivo135, "2017/10/30 15:34", "Normal");
        $tarjeta->pagar($colectivo135, "2017/10/30 18:36", "Normal");
        $this->assertEquals($tarjeta->get_saldo(), 30.6);
    }

    public function test5() {
        $tarjeta = new Tarjeta(55555555);
        $tarjeta->recargar(50);
        $colectivo138 = new Colectivo("138", "Rosario Bus");
        $colectivo142Negro = new Colectivo("142 Negro", "Rosario Bus");
        $tarjeta->pagar($colectivo138, "2017/10/30 23:15", "Normal");
        $tarjeta->pagar($colectivo142Negro, "2017/10/30 23:37", "Normal");
        $this->assertEquals($tarjeta->get_saldo(), 37.66);
    }

    public function test6() {
        $tarjeta = new Tarjeta(66666666);
        $tarjeta->recargar(100);
        $colectivo138 = new Colectivo("138", "Rosario Bus");
        $colectivo142Negro = new Colectivo("142 Negro", "Rosario Bus");
        $tarjeta->pagar($colectivo138, "2017/10/30 23:15", "Normal");
        $tarjeta->pagar($colectivo142Negro, "2017/10/30 23:37", "Normal");
        $tarjeta->pagar($colectivo142Negro, "2017/10/30 23:38", "Normal");
        $this->assertEquals($tarjeta->get_saldo(), 77.96);
    }

    public function test7() {
        $tarjeta = new Tarjeta(77777777);
        $tarjeta->recargar(50);
        $bicicleta1234 = new Bicicleta("1234");
        $tarjeta->pagar($bicicleta1234, "2017/10/30 12:23", "Bicicleta");
        $this->assertEquals($tarjeta->get_saldo(), 35.45);
    }

    public function test8() {
        $tarjeta = new Tarjeta(88888888);
        $tarjeta->recargar(50);
        $bicicleta8008 = new Bicicleta("8008");
        $tarjeta->pagar($bicicleta1234, "2017/10/30 12:23", "Bicicleta");
        $tarjeta->pagar($bicicleta1234, "2017/10/30 15:34", "Bicicleta");
        $tarjeta->pagar($bicicleta1234, "2017/10/30 18:49", "Bicicleta");
        $this->assertEquals($tarjeta->get_saldo(), 35.45);   
    }
}
