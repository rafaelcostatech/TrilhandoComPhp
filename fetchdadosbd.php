<?php

include 'Database.php';

$sql = "SELECT * FROM conteudo;";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$res = $stmt->fetchALL(PDO::FETCH_ASSOC);