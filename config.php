<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'PATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_PATH', PATH . '/uploads' );

// URL da home
define( 'HOME_URI', 'http://127.0.0.1/mvc2020/' );

/**INFORMAÇÕES PARA CONEXAO COM O BANCO DE DADOS */
// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Nome do DB
//define( 'DB_NAME', 'mvc' );
define( 'DB_NAME', 'mvc' );
// Usuário do DB
define( 'DB_USER', 'root' );

// Senha do DB
define( 'DB_PASSWORD', 'vertrigo' );

// Charset da conexão PDO
define( 'DB_CHARSET', 'utf8' );

/*-------------------------*/
// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

/**
 * Não edite daqui em diante
 */



 define('header', PATH . '/views/includes/header.php');

 define('menu',  PATH . '/views/includes/menu.php');

 define('footer',  PATH . '/views/includes/footer.php');

 define('form_aluno', PATH . '/views/aluno/form_aluno.php');

?>