<?php
require_once 'persistencia_produto.php';
require_once 'model_produto.php';
class IteratorProduto implements Iterator{
    /**
     *
     * @var resource 
     */
    private $oResource;
    private $iNumRows;
    private $iActualKey = 0;    
    private $oProduto;
    private $oPersisencia;
    
    public function __construct($oResouce) {
        $this->oResource    = $oResouce;
        $this->iNumRows     = pg_affected_rows($oResouce);
        $this->oPersisencia = new PersistenciaProduto();
    }
            
    public function current() {
        return $this->oProduto;
    }

    public function key() {
        return $this->iActualKey;
    }

    public function next() {
        $this->iActualKey++;
        if($this->iActualKey == $this->iNumRows){            
            return false;
        }
        $this->oProduto = new ModelProduto();
        $oRes = pg_fetch_object($this->oResource, $this->iActualKey);
        $this->oPersisencia->loadFromBd($oRes, $this->oProduto);        
        return $this->oProduto;
    }

    public function rewind() {
        $this->iActualKey = 0;        
        $this->oProduto   = new ModelProduto();
        $oRes = pg_fetch_object($this->oResource, $this->iActualKey);
        $this->oPersisencia->loadFromBd($oRes, $this->oProduto);
    }

    public function valid() {
        return $this->iActualKey!=$this->iNumRows;
    }
}