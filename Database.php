<?php

include 'config.php'; // Para o correto funcionamento da aplicação, é necessário completar os dados do arquivo 'config.php' localizado na pasta raiz da aplicação.


try {
$conexao = new PDO($param['database'] . ':' . 'host=' . $param['host'] . ';dbname=' . $param['dbaseName'], $param['usuario'], $param['password']);

}

catch (PDOException $e){
	die("Erro Código:" . $e->getCode() . ": " . $e->getMessage());

}
	
