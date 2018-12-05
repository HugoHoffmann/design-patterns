<?php
require_once './FactorySCreator.php';
require_once './ObjectTextBox.php';
class FactoryTextBox extends FactorySCreator {

    public function Create($name, $label, $size, $value) {
        return new ObjectTextBox($name, $label, $size, $value);
    }

}
