<?php 
/**
 * Consultas - Model
 */

class ConsultasModel extends MainModel
{

	public function __construct( $db = false, $controller = null ) {
		// Configura o DB (PDO)
		$this->db = $db;
		
		// Configura o controlador
		$this->controller = $controller;
	}


	/**
	 * Listar consultas
	 */
	public function listar_consultas () {
		// Faz a consulta
		$query = $this->db->query(
			//'SELECT * FROM consultas ORDER BY dt_consulta DESC'
			'SELECT * FROM consultas
			INNER JOIN medicos ON medicos.id_medico = consultas.id_medico
			INNER JOIN pacientes ON pacientes.id_paciente = consultas.id_paciente
			ORDER BY consultas.dt_consulta DESC'
		);

		// Retorna
		return $query->fetchAll();
	}

}
