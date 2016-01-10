<?php

$param = array(
	'database' => 'mysql', // Defina qual o Banco de Dados a ser utilizado
 	'host' => 'localhost', // Defina o host do Banco de Dados
 	'dbaseName' => 'trilhando', // Defina o nome da Base de dados que será utilizada
 	'usuario' => 'root', // Defina o usuário do banco de dados do seu sistema
 	'password' => '123456' // Defina a Senha do banco de dados do seu sistema
  	);


// Registre aqui as rotas da aplicação no array $routes e as rotas de administração acessiveis através de login devem existir também no $privateroutes.

$routes = array(
	'home', 
	'empresa',
	'produtos', 
	'servicos', 
	'contato', 
	'admin',
	'homeadmin',
	'empresaadmin',
	'produtosadmin',
	'servicosadmin',
	'login',
	'auth',
	'disconect',
	'update',
	); 

$privateroutes = array(
	'admin',
	'homeadmin',
	'empresaadmin',
	'produtosadmin',
	'servicosadmin',
	'auth',
	'disconect',
	'update',
	);


// Para cada rota registrada acima que contenham conteúdo dinâmico para ser guardado em bd, registrar o conteúdo abaixo.

$conteudo = array(
	'home' => '<p>Sejam bem vindos ao nosso site.</p>',
	'empresa' => '<p>Nossa empresa tem PHP na veia!</p>',
	'produtos' => '<p>Prod001 - Cachacis</p>
				   <p>Prod002 - Cervejis</p>
				   <p>Prod003 - Vinhis</p>',
	'servicos' => '<p>Serv001 - PhPeis</p>
				   <p>Serv002 - Cachacis</p>
				   <p>Serv003 - BancodeDadeis</p>',
	);

// Registrar uma variável de Usuário e uma de Senha para cada novo usuário e referenciá-las no array de usuários. O arquivo Fixture.php utilizará o array abaixo para registrar no dbase os usuários de teste.

$usuario1 = 'rafael';
$senha1 = password_hash('123', PASSWORD_DEFAULT);
$usuario2 = 'jose';
$senha2 = password_hash('123456', PASSWORD_DEFAULT);

$usuarios = array(
	$usuario1 => $senha1,
	$usuario2 => $senha2,
	);
