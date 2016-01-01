<?php

include 'head.php';
require_once 'Database.php';
include 'config.php';

        
    $conexao->query("DROP TABLE IF EXISTS conteudo;");
    
    $conexao->query("CREATE TABLE conteudo (
        rota VARCHAR(100),
        mensagem VARCHAR(100));");

    foreach ($conteudo as $key => $value) {
        $conexao->query("INSERT INTO conteudo (rota, mensagem)
            VALUES ('$key', '$value')");
}
?>

<div class="container">
    <div class="page-header">
    	<br/><h2>Fixture executada com sucesso. Agora a aplicação está pronta para testes!</h2>
    </div>
</div>
<ul class="nav nav-pills nav-justified">
    <li role="presentation"><a href="home">Home</a></li>
</ul>

