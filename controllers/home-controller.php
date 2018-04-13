<?php
/**
 * home
 */

class HomeController extends MainController
{

    public function index() {
		// Título da página
		$this->title = 'Home';
		$this->templatePage = 'home';

		$medicos = $this->load_model('medicos-model');
		$listaMedicos = $medicos->listar_medicos_home();

		// carrega o template master dos sistema........
        require ABSPATH . '/views/master.php';
    }

}
