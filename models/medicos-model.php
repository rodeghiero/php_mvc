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
	 * Listar médicos geral
	 */
	public function listar_medicos () {
		// Faz a consulta
		$query = $this->db->query(
			'SELECT * FROM medicos WHERE me_status = "A" ORDER BY me_dt_ultimo_acesso DESC'
		);

		// Retorna
		return $query->fetchAll();
	}


	/**
	 * Adicionar novo médico
	 */
	public function add_medico () {
		// Insere os dados
		$hje = date('Y-m-d');
		$query = $this->db->query(
			'INSERT INTO medicos (me_nome, me_email, me_fone, me_endereco, me_descricao, me_especialidades, me_valor, me_dt_cadastro, me_dt_ultimo_acesso, me_status)
			VALUES ("' . $_POST["nome"] . '", "' . $_POST["email"] . '", "' . $_POST["fone"] . '", "", "", "' . $_POST["especialidades"] . '", "' . $this->valorToUsa($_POST["valor"]) . '", "' . $hje . '", "' . $hje . '", "A")'
		);

		// Retorna
		return;
	}


	/**
	 * Edita um médico existente
	 */
	public function edit_medico () {
		// Insere os dados
		$query = $this->db->query(
			'UPDATE medicos
			SET me_nome = "' . $_POST["nome"] . '", me_email = "' . $_POST["email"] . '", me_fone = "' . $_POST["fone"] . '", me_especialidades = "' . $_POST["especialidades"] . '", me_valor = "' . $this->valorToUsa($_POST["valor"]) . '"
			WHERE id_medico = ' . $_POST['medicoId']
		);

		// Retorna
		return;
	}


	/**
	 * Remove um médico existente
	 */
	public function remove_medico () {
        $query = $this->db->query(
        	'DELETE FROM medicos
			WHERE id_medico = ' . $_GET['itm']
		);

		// Retorna
		return;
    }

}
