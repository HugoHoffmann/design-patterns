<?php
require_once './ObjectItemOfForm.php';
class ObjectComboBox extends ObjectItemOfForm {

    private $value;
    private $name;
    private $label;
    private $size;
    private $items = array();

    public function __construct($name, $label, $size, $value = null) {

        $this->name = $name;
        $this->label = $label;
        $this->size = $size;
        $this->value = $value;
    }

    public function getHTML() {
        $str = "<label for=\"cmb_{$this->name}\">" . strtoupper($this->label) . ":</label> <select
    name=\"cmd_{$this->name}\" size=\"{$this->size}\" >\n\r";
        if (count($this->items) > 0) {
            foreach ($this->items as $item => $key) {
                $str .= "\t\t<option value=\"{$item}\">{$key}</option>\n\r";
            }
        }
        $str .= "</select>";
        return $str;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->size = $value;
    }

    public function addNewItem($value, $label) {
        $this->items[$value] = $label;
    }

}

