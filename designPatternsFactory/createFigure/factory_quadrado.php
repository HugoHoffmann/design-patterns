<?php
require_once './abstract_factory_figura_geometrica.php';
require_once './quadrado.php';
Class FactoryQuadrado extends AbstractFatoryFiguraGeometrica{    
    public function create($nome, $cor, $fLado = false, $fBase = false, $fAltura = false, $fRaio = false) {
        return new Quadrado($nome, $cor, $fLado);
    }
}