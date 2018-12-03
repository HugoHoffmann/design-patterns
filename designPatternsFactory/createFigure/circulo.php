<?php
require_once('figura_geometrica.php');
class Circulo extends FiguraGeometrica{	
	private $fRaio;
	const PI = 3.14;
	
	public function __construct($fRaio){
		$this->fRaio = $fRaio;		
	}
	
	public  function calculaArea(){
		return self::PI * (pow($this->fRaio, 2));
	}
	
	public function calculaPerimetro(){
		return 2 * $this->fRaio * self::PI;
	}
	
	public function setRaio($fRaio){
		$this->fRaio = $fRaio;
	}

	public function getRaio(){
		return $this->fRaio;
	}
}