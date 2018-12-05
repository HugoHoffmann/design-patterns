<?php
require_once('figura_geometrica.php');
class Quadrado extends FiguraGeometrica{	
	private $fLado;
	
	public function __construct($fLado){
		$this->fLado = $fLado;
	}
	
	public  function calculaArea(){
		return $this->fLado * $this->fLado;
	}
	
	public function calculaPerimetro(){
		return $this->fLado * 4;
	}
	
	public function setLado($fLado){
		$this->fLado = $fLado;
	}
	
	public function getLado(){
		return $this->fLado;
	}
}