<?php

session_start();
include 'head.php';


?>

<div class='container'>
	<span id='sitebtn'class="input-group-btn">
            <a href="home" class="btn btn-primary" role="button">Retorno ao Site</a>
    </span>
</div>

<body id='bodyadmin'>
	<div class="container">
	    <div class="page-header">
	        <h1 id='admin'>Página de Login Administrativo</h1><br/>
	        <?php if (isset($erro)) {echo '<h3>Login ou senha inválidos!</h3>';} ?>
	    </div>
	    <form class="form-horizontal" role="form" method="post" ACTION="auth">
	        <div class="form-group">
	            <label class="control-label col-sm-2" for="login">Login:</label>
	            <div class="col-sm-10">
	                <input type="text" class="form-control" id="login" placeholder="Digite seu Login" name="login" required="required">
	            </div>
	        </div>
	        <div class="form-group">
	            <label class="control-label col-sm-2" for="senha">Senha:</label>
	            <div class="col-sm-10">
	                <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha" required="required">
	            </div>
	        </div>
	        <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Conectar</button>
                </div>
            </div>
	    </form>

	</div>
</body>