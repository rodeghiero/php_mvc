<?php
/**
 * Verifica chaves de arrays
 *
 * Verifica se a chave existe no array e se ela tem algum valor.
 */
function chk_array ( $array, $key ) {
	// Verifica se a chave existe no array
	if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
		// Retorna o valor da chave
		return $array[ $key ];
	}

	// Retorna nulo por padrão
	return null;
}


/**
 * Função para carregar automaticamente todas as classes padrão
 * Ver: http://php.net/manual/pt_BR/function.autoload.php.
 */
function __autoload($class_name) {
	$file = ABSPATH . '/classes/class-' . $class_name . '.php';

	if ( ! file_exists( $file ) ) {
		require_once ABSPATH . '/views/404.php';
		return;
	}

	// Inclui o arquivo da classe
    require_once $file;
}
