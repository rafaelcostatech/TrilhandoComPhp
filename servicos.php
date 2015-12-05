<?php
$link = 'servicos';
use Content\Content;
include 'Content/Content.php';
include 'head.php';
include 'header.php'; ?>

<div class="container">
    <div class="page-header">
        <h1>Nossos Serviços</h1><br/>
        <?php 
            $conteudo = new Content(4);
            echo $teste;
        ?>
    </div>
</div>

<?php
include 'footer.php'; ?>

