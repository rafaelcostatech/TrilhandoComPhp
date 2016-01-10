    <?php // Sempre que clicar em um link o sistema direciona para uma rota ex: "a href='home'", vai logar no browse em 'home' e o index.php direciona para a rota correta. 
          // A variável $rotas é setada através do index.php que sempre é carregado quando acessada a url.
    ?>

    <body>
    <header>
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"
                    <?php
                        if ($rota == 'home') {
                                echo 'class="active"';}
                                elseif ($rota == '') {
                                    echo 'class="active"';
                                    $rota = 'home'; //Se a rota for NULL o sistema seta a variável como 'home' para definir o conteúdo a ser exibido.
                                }
                        else {
                            echo 'class="null"';
                        }
                    ?>
                ><a href="home">Home</a></li>

                <li role="presentation"
                    <?php
                        if ($rota == 'empresa')       {
                            echo 'class="active"';}
                    else {
                            echo 'class="null"';
                    }
                    ?>
                ><a href="empresa">Empresa</a></li>
                <li role="presentation"
                    <?php
                    if ($rota == 'produtos') {
                        echo 'class="active"';}
                    else {
                        echo 'class="null"';
                    }
                    ?>
                ><a href="produtos">Produtos</a></li>
                <li role="presentation"
                    <?php
                    if ($rota == 'servicos') {
                        echo 'class="active"';}
                    else {
                        echo 'class="null"';
                    }
                    ?>
                ><a href="servicos">Serviços</a></li>
                <li role="presentation"
                    <?php
                    if ($rota == 'contato') {
                        echo 'class="active"';}
                    else {
                        echo 'class="null"';
                    }
                    ?>
                    ><a href="contato">Contato</a></li>
                </ul>
            <form class="form-horizontal" role="form" method="get" ACTION="busca.php">
                <div class="row">
              <div class="col-lg-3" id="busca">
                <div class="input-group">
                  <input type="text" class="form-control" name="busca" placeholder="Digite aqui sua busca">
                        <span class="input-group-btn">
                           <button type="submit" class="btn btn-success" type="button">Busca</button>
                        </span>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </form>
            <span id='areaadminbtn'class="input-group-btn">
                <a href="login" class="btn btn-warning" role="button">Àrea Administrativa</a>
            </span>

    </div>
    </header>