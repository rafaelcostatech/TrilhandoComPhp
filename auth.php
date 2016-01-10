<?php

require_once 'Database.php';

$usuario = $_POST['login'];
$senha = $_POST['senha'];

if (isset($usuario) and isset($senha)) {

    $sql = "select * from usuarios where login = :usuario";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("usuario", $usuario);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    $login = ($res['login']);
    $password = ($res['senha']);



    if ($usuario == $login and password_verify($senha, $password) == 1) {
	   if (!isset ($_SESSION['sessao'])) {
            include 'session.php';
            include 'admin.php';
        } else {
    	   include 'admin.php';
        }	
    } else {
        $erro = 1;
    	include 'login.php';
    }
} else {
        $erro = 1;
        include 'login.php';    
}



