<?php
/**
 * MainModel - Modelo geral
 */
class MainModel
{

	/**
	 * $db
	 * O objeto da nossa conexão PDO
	 */
	public $db;

	/**
	 * $controller
	 * O controller que gerou esse modelo
	 */
	public $controller;


	/**
	 * Converte formato de Valores para BRASIL
	 */
	public function valorToBr( $valor = null ) {
		$novo_valor = null;

		if ( $valor ) {
			$valor = explode('.', $valor);
			$novo_valor .= $valor[0] . ',' . $valor[1];
		}

		// Retorna o novo valor
		return $novo_valor;
	}


	/**
	 * Converte formato de Valores para USA
	 */
	public function valorToUsa( $valor = null ) {
		$novo_valor = null;

		if ( $valor ) {
			$valor = explode(',', $valor);
			$novo_valor .= $valor[0] . '.' . $valor[1];
		}

		// Retorna o novo valor
		return $novo_valor;
	}


	/**
	 * Filtra hora
	 * Obtém a hora e remove o valor de segundos
	 */
	public function fltra_hora( $hora = null ) {
		$nova_hora = null;

		if ( $hora ) {
			$hora = preg_split('/\-|\/|\s|:/', $hora);

			$hora = array_map( 'trim', $hora );

			$nova_hora .= chk_array( $hora, 0 ) . ':';
			$nova_hora .= chk_array( $hora, 1 );
		}

		// Retorna a nova data
		return $nova_hora;
	}


	/**
	 * Inverte datas 
	 * Obtém a data e inverte seu valor.
	 */
	public function inverte_data( $data = null ) {
		// Configura uma variável para receber a nova data
		$nova_data = null;

		// Se a data for enviada
		if ( $data ) {
			$data = preg_split('/\-|\/|\s|:/', $data);
			$data = array_map( 'trim', $data );

			// Cria a data invertida
			$nova_data .= chk_array( $data, 2 ) . '/';
			$nova_data .= chk_array( $data, 1 ) . '/';
			$nova_data .= chk_array( $data, 0 );

			// Configura a hora
			if ( chk_array( $data, 3 ) ) {
				$nova_data .= ' ' . chk_array( $data, 3 );
			}

			// Configura os minutos
			if ( chk_array( $data, 4 ) ) {
				$nova_data .= ':' . chk_array( $data, 4 );
			}

			// Configura os segundos
			if ( chk_array( $data, 5 ) ) {
				$nova_data .= ':' . chk_array( $data, 5 );
			}
		}

		// Retorna a nova data
		return $nova_data;
	}

}
