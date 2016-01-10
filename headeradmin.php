<?php

include 'fetchdadosbd.php';
$posicao = strpos($rota,"admin");
$rota = substr($rota, 0,$posicao);
$rotaauth = ltrim(($_SERVER["REQUEST_URI"]), '/');
?>

<body id='bodyadmin'>
<header>
    <div class='container'>
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Rotas Editáveis
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li id='return'><a id='admin' href='home'>Retorno ao Site</a></li>
                    <?php
                        foreach ($res as $result) { 
                        echo "<li><a  id='admin' href='$result[rota]admin'>";
                        printf(strtoupper($result['rota']));
                        echo "</a></li>";
                        }
                    ?>
                    <li id='disconect'><a id='admin' href='disconect'>Desconectar</a></li>
                </ul>
    </div>
    <?php if($rotaauth != 'auth') {
        echo "<h3 id='h2admin'>". "Bem vindo " . strtoupper($_SESSION['sessao']) . "!" . "</h3>";
           if ($rotaauth != 'update') {
                echo "<h2 id='h2admin'>Esta é a Área de Administração da Página " .'"' . ucfirst($rota) . '"' ."</h2>";
            }
        } ?>

</header>