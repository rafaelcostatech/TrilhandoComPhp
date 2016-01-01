<?php
include 'head.php';
include 'header.php';
require_once 'Database.php';

$busca = $_GET['busca'];
    

    $sql = "SELECT * FROM conteudo WHERE LOCATE(:busca, mensagem);";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("busca", $busca); 
    $stmt->execute();
    $res = $stmt->fetchALL(PDO::FETCH_ASSOC);
    

    ?>

<div class="container">
    <div class="page-header">
        <h2>As seguintes páginas tem o conteúdo procurado:</h2><br/>
        <?php  
    		foreach ($res as $result) { 
    			echo "<a  href='$result[rota]'>";
    			printf(strtoupper($result['rota']));?>
    			<br/></a><?php
    			//printf($result['mensagem']);
    		}
    			
        ?>
    </div>
</div>
