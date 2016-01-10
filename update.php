<?php

include 'head.php';
include 'headeradmin.php';
require_once 'Database.php';

$msg = $_POST['editor1'];
$rt = $_POST['rota'];

$sql = "UPDATE conteudo SET mensagem = :msg where rota = :rt";
$stmt = $conexao->prepare($sql);
$stmt->bindValue("rt", $rt);
$stmt->bindValue("msg", $msg);
$stmt->execute();

echo "<h3 id='h2admin'> Os dados da página " . strtoupper($rt) . " foram atualizados!</h3>";
?>

</div>
</body>