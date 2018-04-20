<?php
/**
 * MedicosController
 */

class MedicosController extends MainController
{

    public function index() {
		// Título da página
		$this->title = 'Medicos';
		$this->templatePage = 'medicos';

		$medicos = $this->load_model('medicos-model');
		$listaMedicos = $medicos->listar_medicos();

		// carrega o template master dos sistema........
        require ABSPATH . '/views/master.php';

    }

    /*
     * Adiciona um novo médico
     */
    public function add() {
        $medicos = $this->load_model('medicos-model');
        $medicos->add_medico();

        // Faz o reload para a tela que lista
        header('Location: ' . HOME_URI . '/medicos');
    }


    /*
     * Edita um médico existente
     */
    public function edit() {
        $medicos = $this->load_model('medicos-model');
        $medicos->edit_medico();

        // Faz o reload para a tela que lista
        header('Location: ' . HOME_URI . '/medicos');
    }


    /*
     * Remove um médico existente
     */
    public function remove() {
        $medicos = $this->load_model('medicos-model');
        $medicos->remove_medico();

        // Faz o reload para a tela que lista
        header('Location: ' . HOME_URI . '/medicos');
    }

}
