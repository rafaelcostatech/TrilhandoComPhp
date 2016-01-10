<?php

require_once 'auth.php';
include 'head.php';

if (!isset($erro)) {
include 'fetchdadosbd.php';
include 'headeradmin.php';
echo "<div class='container'>
    <div class='page-header'>
            <h1 id='admin'>" . strtoupper($_SESSION['sessao']) . ", " . "Bem vindo à área administrativa do site</h1><br/>";
}

?>
