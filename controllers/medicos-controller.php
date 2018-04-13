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

}
