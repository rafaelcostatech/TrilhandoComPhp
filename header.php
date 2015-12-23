<body>
<header>
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li role="presentation"
                <?php
                    if (!isset($_GET['page'])) {
                            echo 'class="active"';}
                    elseif ($_GET['page'] == 'index') {
                            echo 'class="active"';
                        }
                    else {
                        echo 'class="null"';
                    }
                ?>
            ><a href="home.php?page=index&conteudo=1">Home</a></li>

            <li role="presentation"
                <?php
                    if ($_GET['page'] == 'empresa')       {
                        echo 'class="active"';}
                else {
                        echo 'class="null"';
                }
                ?>
            ><a href="empresa.php?page=empresa&conteudo=2">Empresa</a></li>
            <li role="presentation"
                <?php
                if ($_GET['page'] == 'produtos') {
                    echo 'class="active"';}
                else {
                    echo 'class="null"';
                }
                ?>
            ><a href="produtos.php?page=produtos&conteudo=3">Produtos</a></li>
            <li role="presentation"
                <?php
                if ($_GET['page'] == 'servicos') {
                    echo 'class="active"';}
                else {
                    echo 'class="null"';
                }
                ?>
            ><a href="servicos.php?page=servicos&conteudo=4>">Serviços</a></li>
            <li role="presentation"
                <?php
                if ($_GET['page'] == 'contato') {
                    echo 'class="active"';}
                else {
                    echo 'class="null"';
                }
                ?>
            ><a href="contato.php?page=contato">Contato</a></li>
        </ul>
    </div>
</header>