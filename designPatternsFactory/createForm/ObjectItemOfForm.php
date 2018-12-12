<?php

abstract class ObjectItemOfForm {
    public abstract function getValue();
    public abstract function setValue( $value );
    public abstract function getHTML();
}
