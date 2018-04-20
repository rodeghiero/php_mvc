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

}
