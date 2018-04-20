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
			'SELECT * FROM consultas
			INNER JOIN medicos ON medicos.id_medico = consultas.id_medico
			INNER JOIN pacientes ON pacientes.id_paciente = consultas.id_paciente
			ORDER BY consultas.dt_consulta DESC'
		);

		// Retorna
		return $query->fetchAll();
	}


	/**
	 * Listar consultas - FILTRO
	 */
	public function listar_consultas_filtro () {
		// Faz a consulta
		$nome = $_POST["nome"];
		$dtInit = str_replace('/', '-', $this->inverte_data($_POST["data_init"]));
		$dtEnd = str_replace('/', '-', $this->inverte_data($_POST["data_end"]));
		$query = $this->db->query(
			'SELECT * FROM consultas
			INNER JOIN medicos ON medicos.id_medico = consultas.id_medico
			INNER JOIN pacientes ON pacientes.id_paciente = consultas.id_paciente
			WHERE pc_nome LIKE "%' . $nome . '%"
			AND consultas.dt_consulta >= "' . $dtInit . '"
			AND consultas.dt_consulta <= "' . $dtEnd . '"
			ORDER BY consultas.dt_consulta DESC'
		);

		// Retorna
		return $query->fetchAll();
	}


	/**
	 * Adicionar Consulta
	 */
	public function add_consulta () {
		// Insere os dados
		$query = $this->db->query(
			'INSERT INTO consultas (id_medico, id_paciente, compareceu, queixas_paciente, consideracoes_medico, hora_consulta, dt_consulta)
			VALUES ("' . $_POST["medico"] . '", "' . $_POST["paciente"] . '", "N", "", "", "' . $_POST["hora"] . '", "' . $this->inverte_data($_POST["data"]) . '")'
		);

		// Retorna
		return;
	}


	/**
	 * Remover Consulta
	 */
	public function remove_consulta () {
        $query = $this->db->query(
        	'DELETE FROM consultas
			WHERE id_consulta = ' . $_GET['itm']
		);

		// Retorna
		return;
    }


	/**
	 * Listar medicos
	 */
	public function listar_medicos () {
		// Faz a consulta de todos os médicos
		$query = $this->db->query(
			'SELECT * FROM medicos'
		);

		// Retorna
		return $query->fetchAll();
	}


	/**
	 * Listar pacientes
	 */
	public function listar_pacientes () {
		// Faz a consulta de todos os pacientes
		$query = $this->db->query(
			'SELECT * FROM pacientes'
		);

		// Retorna
		return $query->fetchAll();
	}

}
