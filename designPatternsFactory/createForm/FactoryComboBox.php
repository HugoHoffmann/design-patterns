<?php
require_once  './FactorySCreator.php';
require_once  './ObjectComboBox.php';
class FactoryComboBox extends FactorySCreator {

    public function Create($name, $label, $size, $value = null) {
        return new ObjectComboBox($name, $label, $size, $value);
    }

}
