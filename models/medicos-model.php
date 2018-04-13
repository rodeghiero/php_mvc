<?php 
/**
 * Médicos - Model
 */

class MedicosModel extends MainModel
{

	public function __construct( $db = false, $controller = null ) {
		// Configura o DB (PDO)
		$this->db = $db;
		
		// Configura o controlador
		$this->controller = $controller;
	}


	/**
	 * Listar médicos na home
	 */
	public function listar_medicos_home () {
		// Faz a consulta
		$query = $this->db->query(
			'SELECT me_nome, me_email, me_especialidades FROM medicos LIMIT 5'
		);
		// Retorna
		return $query->fetchAll();
	}


	/**
	 * Listar médicos
	 */
	public function listar_medicos () {
		// Faz a consulta
		$query = $this->db->query(
			'SELECT * FROM medicos WHERE me_status = "A" ORDER BY me_dt_ultimo_acesso DESC'
		);
		// Retorna
		return $query->fetchAll();
	}
	
}
