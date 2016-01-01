<?php

require_once 'Database.php';


    $sql = "select mensagem from conteudo where rota = :rota";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("rota", $rota); //A variável $rota é definida no header.php
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    printf($res['mensagem']);