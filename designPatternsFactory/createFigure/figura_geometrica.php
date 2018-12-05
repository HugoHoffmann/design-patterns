<?php
abstract class FiguraGeometrica{
	private $sCor;
	private $sNome;
	
    abstract public function calculaArea();
	abstract public function calculaPerimetro();
	
	public function getNome(){
		return $this->sNome;
	}
	
	public function setNome($sNome){
		$this->sNome = $sNome;
	}
	
	public function getCor(){
		return $this->sCor;
	}
	
	public function setCor($sCor){
		$this->sCor = $sCor;
	}
}