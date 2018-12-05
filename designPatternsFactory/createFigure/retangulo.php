<?php
require_once('figura_geometrica.php');
class Retangulo extends FiguraGeometrica{	
	private $fBase;
	private $fAltura;
	
	public function __construct($fBase, $fAltura){
		$this->fBase = $fBase;
		$this->fAltura = $fAltura;
	}
	
	public  function calculaArea(){
		return $this->fBase * $this->fAltura;
	}
	
	public function calculaPerimetro(){
		return $this->fBase * 2 + $this->fAltura * 2;
	}
	
	public function setBase($fBase){
		$this->fBase = $fBase;
	}
	
	public function getBase(){
		return $this->fBase;
	}
	
	public function setAltura($fAltura){
		$this->fAltura = $fAltura;
	}
	
	public function getAltura(){
		return $this->fAltura;
	}
}