<?php
/**
 * PacientesController
 */

class PacientesController extends MainController
{

    public function index() {
		// Título da página
		$this->title = 'Pacientes';
		$this->templatePage = 'pacientes';

		$pacientes = $this->load_model('pacientes-model');
		$listaPacientes = $pacientes->listar_pacientes();

		// carrega o template master dos sistema........
        require ABSPATH . '/views/master.php';

    }


    /*
     * Adiciona um novo paciente
     */
    public function add() {
        $pacientes = $this->load_model('pacientes-model');
        $pacientes->add_paciente();

        // Faz o reload para a tela que lista
        header('Location: ' . HOME_URI . '/pacientes');
    }


    /*
     * Edita um paciente existente
     */
    public function edit() {
        $pacientes = $this->load_model('pacientes-model');
        $pacientes->edit_paciente();

        // Faz o reload para a tela que lista
        header('Location: ' . HOME_URI . '/pacientes');
    }


    /*
     * Remove um paciente existente
     */
    public function remove() {
        $pacientes = $this->load_model('pacientes-model');
        $pacientes->remove_paciente();

        // Faz o reload para a tela que lista
        header('Location: ' . HOME_URI . '/pacientes');
    }

}
