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

        $medicos = $this->load_model('medicos-model');
        $listaMedicos = $medicos->listar_medicos();

		$pacientes = $this->load_model('pacientes-model');
        $listaPacientes = $pacientes->listar_pacientes();
		
		// carrega o template master dos sistema........
        require ABSPATH . '/views/master.php';
		
    }


    /*
     * Executa o filtro dos itens na tela por AJAX
     */
    public function filtro() {
        if ($_POST) {
			$consultas = $this->load_model('consultas-model');
			$listaConsultasFiltro = $consultas->listar_consultas_filtro();
			$qtResults = count($listaConsultasFiltro);

            //verifica a query aqui com os dados retornados..............................
            if($qtResults > 0){
            	header('Content-type: application/json');
                $contents = json_encode($listaConsultasFiltro);
                echo $contents;

            } else {
                $status = 'nada';
                $message = 'Ops, nada foi encontrado para a busca efetuada!';
                echo "{ \"status\" : \"".$status."\", \"message\" : \"".$message."\" }";
            }

        } else {
            $status = 'notpost';
            $message = 'Este envio não é um Post do sistema!';
            echo "{ \"status\" : \"".$status."\", \"message\" : \"".$message."\" }";
        }
    }


    /*
     * Adiciona uma nova consulta
     */
    public function add() {
        $consultas = $this->load_model('consultas-model');
        $consultas->add_consulta();

        // Faz o reload para a tela que lista a agenda
        header('Location: ' . HOME_URI . '/consultas');
    }


    /*
     * Remove uma consulta existente
     */
    public function remove() {
        $consultas = $this->load_model('consultas-model');
        $consultas->remove_consulta();

        // Faz o reload para a tela que lista a agenda
        header('Location: ' . HOME_URI . '/consultas');
    }

}
