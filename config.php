<?php
/**
 * Configuração geral
 */

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '/views/_uploads' );

// URL da home
define( 'HOME_URI', 'http://localhost/php_mvc' );

// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Infos DB
define( 'DB_NAME', 'gestao_medicos' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_CHARSET', 'utf8' );

// Se você estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );


// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';
