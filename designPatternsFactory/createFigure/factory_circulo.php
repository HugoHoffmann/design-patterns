<?php
require_once './abstract_factory_figura_geometrica.php';
require_once './circulo.php';
Class FactoryCirculo extends AbstractFatoryFiguraGeometrica{    
    public function create($nome, $cor, $fLado = false, $fBase = false , $fAltura = false, $fRaio= false) {
        return new Circulo($nome, $cor, $fRaio);
    }
}