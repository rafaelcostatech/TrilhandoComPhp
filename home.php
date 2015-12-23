<?php

use Content\Content;
include 'head.php';
include 'header.php';
include 'Content/Content.php';



?>

<div class="container">
    <div class="page-header">
        <h1>Home</h1>
        <?php 
            $conteudo = new Content(1);
            echo $teste;
        ?>
    </div>
</div>



<?php
include 'footer.php';
?>