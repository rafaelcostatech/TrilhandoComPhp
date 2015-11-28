<body>
<header>
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"
                <?php
                    if ($link == 'home') {
                        echo 'class="active"';}
                    else {
                        echo 'class="null"';
                    }
                ?>
            ><a href="index.php">Home</a></li>

            <li role="presentation"
                <?php
                    if ($link == 'empresa') {
                        echo 'class="active"';}
                else {
                        echo 'class="null"';
                }
                ?>
            ><a href="empresa.php">Empresa</a></li>
            <li role="presentation"
                <?php
                if ($link == 'produtos') {
                    echo 'class="active"';}
                else {
                    echo 'class="null"';
                }
                ?>
            ><a href="produtos.php">Produtos</a></li>
            <li role="presentation"
                <?php
                if ($link == 'servicos') {
                    echo 'class="active"';}
                else {
                    echo 'class="null"';
                }
                ?>
            ><a href="servicos.php">Serviços</a></li>
            <li role="presentation"
                <?php
                if ($link == 'contato') {
                    echo 'class="active"';}
                else {
                    echo 'class="null"';
                }
                ?>
            ><a href="contato.php">Contato</a></li>
        </ul>
    </div>
</header>
