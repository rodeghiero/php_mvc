<?php
/**
 * MedicosController
 */

class ConsultasController extends MainController
{

    public function index() {
		// Título da página
		$this->title = 'Consultas';
		$this->templatePage = 'consultas';

		$consultas = $this->load_model('consultas-model');
		$listaConsultas = $consultas->listar_consultas();
		
		// carrega o template master dos sistema........
        require ABSPATH . '/views/master.php';
		
    }

}
