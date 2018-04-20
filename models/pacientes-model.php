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


	/**
	 * Adicionar novo paciente
	 */
	public function add_paciente () {
		// Insere os dados
		$hje = date('Y-m-d');
		$query = $this->db->query(
			'INSERT INTO pacientes (pc_nome, pc_email, pc_fone, pc_dt_cadastro, pc_dt_ultimo_acesso)
			VALUES ("' . $_POST["nome"] . '", "' . $_POST["email"] . '", "' . $_POST["fone"] . '", "' . $hje . '", "' . $hje . '")'
		);

		// Retorna
		return;
	}


	/**
	 * Edita um paciente existente
	 */
	public function edit_paciente () {
		// Insere os dados
		$query = $this->db->query(
			'UPDATE pacientes
			SET pc_nome = "' . $_POST["nome"] . '", pc_email = "' . $_POST["email"] . '", pc_fone = "' . $_POST["fone"] . '"
			WHERE id_paciente = ' . $_POST['pacienteId']
		);

		// Retorna
		return;
	}


	/**
	 * Remove um paciente existente
	 */
	public function remove_paciente () {
        $query = $this->db->query(
        	'DELETE FROM pacientes
			WHERE id_paciente = ' . $_GET['itm']
		);

		// Retorna
		return;
    }

}
