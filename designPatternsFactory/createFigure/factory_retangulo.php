<?php
require_once './abstract_factory_figura_geometrica.php';
require_once './retangulo.php';
Class FactoryRetangulo extends AbstractFatoryFiguraGeometrica{    
    public function create($nome, $cor, $fLado = false, $fBase = false, $fAltura = false, $fRaio = false) {
        return new Retangulo($nome, $cor, $fBase, $fAltura);
    }
}