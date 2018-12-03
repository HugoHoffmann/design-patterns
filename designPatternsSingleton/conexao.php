<?php

class Conexao{
    /**
     * @var resource
     */
    
    private static $instance;
    private function getInstance(){
        if(!isset(self::$instance)){
            self::$instance = pg_connect('host=localhost dbname=mvc port=5432 user=postgres password=ipm@1234567');
        }
        return self::$instance; 
    }
}
