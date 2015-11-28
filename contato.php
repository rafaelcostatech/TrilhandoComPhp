<?php
$link = 'contato';
include 'head.php';
include 'header.php'; ?>

<div class="container">
    <div class="page-header">
        <h1>Entre em contato</h1>
    </div>
</div>
<div class="container">
    <div class="page-header">
        <form class="form-horizontal" role="form" method="post" ACTION="envio.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nome">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Digite seu Nome" name="nome" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" name="mail" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="assunto">Assunto:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="text" placeholder="Digite o Assunto" name="assunto" required="required">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="mensagem">Mensagem:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="text" placeholder="Deixe sua Mensagem" name="mensagem" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
</div>
    </div>
<?php
include 'footer.php'; ?>

