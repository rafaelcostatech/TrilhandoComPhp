<?php
include 'head.php';
include 'header.php'; ?>

<div class="container">
    <div class="page-header">
        <h2>Dados enviados com sucesso, abaixo seguem os dados que você enviou:</h2>
        <?php $name = $_POST['nome']; ?>
        <p><?php $mail = $_POST['mail'];?>
        <p><?php $assunto = $_POST['assunto'];?>
        <p><?php $mensagem = $_POST['mensagem'];?>

        <br/>
        <h4>NOME: <?php echo $name ?></h4>
        <h4>E-MAIL: <?php echo $mail ?></h4>
        <h4>ASSUNTO: <?php echo $assunto ?></h4>
        <h4>MENSAGEM: <?php echo $mensagem ?></h4>
    </div>
</div>
<div class="container">
    <div class="page-header">

    </div>
</div>
<?php
include 'footer.php'; ?>

