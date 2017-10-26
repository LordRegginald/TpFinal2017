<?php

class Colectivo {
	public $boleto_normal = [
		'normal'	=>	9.70,
		'estudiante'	=>	4.85,];
	public $boleto_de_trasbordo = [
		'normal'	=>	2.64,
		'estudiante'	=>	1.32,];
	public $linea;

	public function __construct( $linea ) {
		$this->linea = $linea;
	}
}