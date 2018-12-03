<?php

require_once './conexao.php';


$conn = Conexao::getInstance();
pg_exec($conn, 'select * from table');

