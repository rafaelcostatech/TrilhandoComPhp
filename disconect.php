<?php

session_start();
$_SESSION['sessao'];
session_destroy();
include 'head.php';

?>

<body id='bodydisconect'>
		<div class="container">
    	<div class="page-header">
        <h3 id='admin'>Você foi desconectado com sucesso!</h3><br/>
        <span id='sitebtn'class="input-group-btn">
            <a href="home" class="btn btn-primary" role="button">Retorno ao Site</a><br/>
        </span>
        
    </div>
</div>

</body>