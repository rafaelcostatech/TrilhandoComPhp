<?php
$link = 'empresa';
use Content\Content;
include 'Content/Content.php';
include 'head.php';
include 'header.php'; 

?>

<div class="container">
    <div class="page-header">
        <h1>A Empresa</h1>
        <?php 
            $conteudo = new Content(2);
            echo $teste;
        ?>
    </div>
</div>

<?php
include 'footer.php'; ?>

