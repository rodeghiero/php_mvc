<?php 
/**
 * Pacientes - Model
 */

class PacientesModel extends MainModel
{

	public function __construct( $db = false, $controller = null ) {
		// Configura o DB (PDO)
		$this->db = $db;

		// Configura o controlador
		$this->controller = $controller;
	}


	/**
	 * Listar pacientes na home
	 */
	public function listar_pacientes_home () {
		// Faz a consulta
		$query = $this->db->query(
			'SELECT * FROM pacientes LIMIT 5'
		);

		// Retorna
		return $query->fetchAll();
	}


	/**
	 * Listar pacientes geral
	 */
	public function listar_pacientes () {
		// Faz a consulta
		$query = $this->db->query(
			'SELECT * FROM pacientes ORDER BY pc_dt_ultimo_acesso DESC'
		);

		// Retorna
		return $query->fetchAll();
	}

}
